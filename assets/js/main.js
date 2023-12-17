jQuery(document).ready(function($) {

    _handleScroll();

    _showHideMenu();

    _hoclaixe();
    //submit form đăng kí hoc lái xe

    function _hoclaixe() {
        $('.hlx-page-signup__wrap form').on('submit', function(event) {
            event.preventDefault();

            // Lấy dữ liệu từ form
            var formData = $(this).serialize();

            // Disable nút submit và thêm hiệu ứng loading
            var submitButton = $('button[type="submit"]');
            submitButton.prop('disabled', true).addClass('loading');

            // Thực hiện AJAX request
            $.ajax({
                type: 'POST',
                url: hoclaixeAjax.ajaxUrl,
                data: {
                    action: 'save_hoso_hoc_lai_xe',
                    formData: formData
                },
                success: function(response) {
                    // Re-enable nút submit và loại bỏ hiệu ứng loading
                    submitButton.prop('disabled', false).removeClass('loading');

                    console.log(response);

                    // Kiểm tra nếu đăng ký thành công
                    if (response.success) {
                        // Đặt lại form
                        $('.hlx-page-signup__wrap form')[0].reset();

                        // Hiển thị thông báo thành công
                        var successMessage = $('<div class="success-message">Chúc mừng bạn đã đăng ký thành công. Chúng tôi sẽ liên hệ với bạn sớm.</div>');
                        $('.hlx-page-signup__wrap').append(successMessage);

                        // Ẩn thông báo sau một khoảng thời gian
                        setTimeout(function() {
                            successMessage.fadeOut('slow', function() {
                                $(this).remove();
                            });
                        }, 10000); // 10000 milliseconds (10 seconds)
                    } else {
                        // Xử lý lỗi nếu có
                        console.error('Error:', response.error);
                        // Hiển thị thông báo lỗi nếu cần thiết
                    }

                    return;
                }
            });
        });
    }


    //Show/Hide Menu Mobile
    function _showHideMenu() {
        $('header #hoclaixe-menu-open').click(function () {
            $(this).toggleClass('show');
            $('.popup-menu').toggleClass('active');
            $('body').toggleClass('show-menu');

        });

    }

    function _handleScroll() {

        $(window).scroll(function() {

            var scroll = $(window).scrollTop();

            if (scroll > 1) {

                $('header.hoclaixe-header').addClass('header-fixed');

            } else {

                $('header.hoclaixe-header').removeClass('header-fixed');

            }

        });

    }

});

