<div
    class="full-page"
    data-type="component-text"
    data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/class/all_class_page_section.jpg')); ?>"
    data-aoraeditor-title="All Quiz Page Section" data-aoraeditor-categories="Quiz Page">

    <div class="row">
        <div class="col-sm-12 ui-resizable" data-type="container-content">
            <?php echo $__env->make(theme('snippets.components._banner'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 ui-resizable" data-type="container-content">
            <?php echo $__env->make(theme('snippets.components._quiz_page_section'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>

<?php echo $__env->make(theme('snippets.components._quiz_page_section'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\xampp\htdocs\github\upqutell\resources\views/frontend/infixlmstheme/snippets/pages/quizzes.blade.php ENDPATH**/ ?>