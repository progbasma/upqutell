<div data-type="component-text"
     data-preview="<?php echo e(!function_exists('themeAsset')?'':themeAsset('img/snippets/preview/reward/4.jpg')); ?>"
     data-aoraeditor-title="Reward Dark" data-aoraeditor-categories="Home Page">

    <style>
        .reward {
            padding-top: calc(var(--section-sepreate-lg) + 20px)
        }

        .reward-img {
            width: 505px;
            position: relative;
            left: -105px
        }

        @media only screen and (min-width: 1440px) and (max-width: 1580px) {
            .reward-img {
                width: 435px;
                left: -65px
            }
        }

        @media only screen and (min-width: 1280px) and (max-width: 1439px) {
            .reward-img {
                width: 400px;
                left: -70px
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .reward-img {
                width: 100%;
                left: 0
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .reward-img {
                width: 380px;
                margin: auto;
                margin-bottom: 30px;
                left: 0
            }
        }

        @media only screen and (max-width: 767px) {
            .reward-img {
                left: 0;
                width: 80%;
                margin: auto;
                margin-bottom: 30px
            }
        }

        .reward-content {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 47px;
            padding: 90px 130px 80px 85px;
            box-shadow: 0px 3px 71px rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 1
        }

        @media only screen and (min-width: 1280px) and (max-width: 1439px) {
            .reward-content {
                padding: 70px
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .reward-content {
                padding: 60px
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .reward-content {
                padding: 40px
            }
        }

        @media only screen and (max-width: 767px) {
            .reward-content {
                padding: 24px;
                border-radius: 27px
            }
        }

        .reward-content h3 {
            margin-bottom: 20px;
            color: #F0F3F8;
            font-size: 48px;
            line-height: 1.25
        }

        @media only screen and (min-width: 1280px) and (max-width: 1439px) {
            .reward-content h3 {
                font-size: 42px
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .reward-content h3 {
                font-size: 36px
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .reward-content h3 {
                font-size: 32px
            }
        }

        @media only screen and (max-width: 767px) {
            .reward-content h3 {
                font-size: 28px
            }
        }

        .reward-content p {
            font-size: 18px;
            line-height: 1.77778;
            color: #98A6B4;
            margin-bottom: 34px;
            color: #98A6B4
        }

        @media only screen and (max-width: 767px) {
            .reward-content p {
                font-size: 16px
            }
        }

        .reward-content .theme-btn {
            --btn-padding-y: 16px
        }

        .reward-position {
            --shape-height: 200px;
            position: absolute;
            top: calc(var(--shape-height) / 2 * -1);
            right: -20px;
            height: var(--shape-height)
        }

        @media only screen and (min-width: 992px) and (max-width: 1279px) {
            .reward-position {
                --shape-height: 150px
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .reward-position {
                --shape-height: 130px
            }
        }

        @media only screen and (max-width: 767px) {
            .reward-position {
                --shape-height: 80px;
                right: 0
            }
        }

        .reward-position img {
            width: 100%;
            height: 100%;
            object-fit: contain
        }

    </style>

    <div class="reward">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="reward-img">
                        <img src="<?php echo e(themeAsset('img/others/reward-img.png')); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="reward-content">
                        <h3>Win Reward Points</h3>
                        <p>Buy course, complete course, incarese activity & many more way to win club points. You will
                            be able to use your club points to get free prizes and courses. Start using the system now
                            and collect points!</p>
                        <a href="<?php echo e(url('courses')); ?>" class="theme-btn">View All Courses</a>
                        <div class="reward-position">
                            <img src="<?php echo e(themeAsset('img/shape/reward-position.png')); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\github\upqutell\resources\views/frontend/infixlmstheme/snippets/components/_reward-section_dark.blade.php ENDPATH**/ ?>