<?php

namespace App\Imports;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Modules\Quiz\Entities\QuestionGroup;

class QuizGroupImport implements WithMultipleSheets, WithStartRow, WithHeadingRow, ToCollection
{
    public function sheets(): array
    {
        return [
            '0' => new QuizGroupImport(),
        ];
    }

    public function startRow(): int
    {
        return 2;
    }

    public function headingRow(): int
    {
        return 1;
    }


    public function buildTree(array &$elements, $parentCode = '')
    {
        $branch = array();
        foreach ($elements as $element) {
            if ($element['parent_code'] == $parentCode) {
                $children = $this->buildTree($elements, $element['code']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[$element['code']] = $element;
                unset($elements[$element['code']]);
            }
        }
        return $branch;
    }

    public function collection(Collection $rows)
    {

        $toArray = $rows->sortBy('name')->toArray();
        foreach ($toArray as $key => $arr) {
            $check = QuestionGroup::where('code', $arr['parent_code'])->first();
            if ($check) {
                $this->addBranch($arr);
                unset($toArray[$key]);
            }
        }
        $rows = $this->buildTree($toArray);

        foreach ($rows as $row) {
            $this->addBranch($row);
        }
    }

    public function addBranch($row)
    {
        $serial = QuestionGroup::count();
        $parent_id = 0;
        if (empty($row['name'])) {
            Toastr::error(trans('org.Group Name is required'), trans('common.Error'));

        }
        if (empty($row['code'])) {
            Toastr::error(trans('org.Group Code is required'), trans('common.Error'));

        }
        $level = 0;
        if (!empty($row['parent_code'])) {
            $parent = QuestionGroup::where('code', $row['parent_code'])->first();
            if (!$parent) {
                Toastr::error($row['parent_code'] . ' ' . trans('org.Is a invalid parent code'), trans('common.Error'));
            } else {
                $parent_id = $parent->id;
                $level = $parent->level + 1;
            }
        }

        $check = QuestionGroup::where('code', $row['code'])->first();
        if ($check) {
            Toastr::error($row['code'] . ' ' . trans('org.Is a already added'), trans('common.Error'));

        } else {
            QuestionGroup::create([
                'title' => $row['name'],
                'code' => $row['code'],
                'parent_id' => $parent_id,
                'order' => $serial,
                'level' => $level,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        if (isset($row['children'])) {
            foreach ($row['children'] as $child) {
                $this->addBranch($child);
            }
        }
    }
}
