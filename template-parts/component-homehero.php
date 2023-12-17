<div class="hlx-home-hero">
    <div class="container">
        <div class="hlx-home-hero__wrap">
            <div class="row">
                <div class="col-lg-6 hlx-home-hero__wrap-content">
                    <h1><?= get_field('home_hero_heading') ?></h1>
                    <?php if (have_rows('hero__home_list')) : ?>
                        <ul class="hlx-home-hero__wrap-list">
                            <?php while (have_rows('hero__home_list')) : the_row(); ?>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="10" viewBox="0 0 32 10" fill="none">
                                        <path d="M23 1L31 9H0" stroke="#11542B" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                    </svg>
                                    <p><?php the_sub_field('item'); ?></p>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 hlx-home-hero__wrap-form">
                    <div class="hlx-page-signup__wrap-form">
                        <h2>đăng ký để nhận tư vấn</h2>
                        <form method="post" action="">
                            <div class="field-wrap">
                                <input type="text" value="" name="name" placeholder="Nhập tên học viên" required>
                                <label for="Tên học viên">Tên học viên</label>
                            </div>
                            <div class="field-wrap">

                                <input type="email" value="" name="email" placeholder="Địa chỉ email" required>
                                <label for="Địa chỉ email" class="d-none">Tên học viên</label>
                            </div>
                            <div class="field-wrap">
                                <input type="phone" value="" name="phone" placeholder="Số điện thoại" required>
                                <label for="Số điện thoại" class="d-none">Số điện thoại</label>
                            </div>
                            <div class="field-wrap">
                                <!--                        <input type="text" value="" name="address" placeholder="Địa chỉ" required>-->
                                <select name="address" id="address" required>
                                    <option value="Thành phố Đà Lạt">Thành phố Đà Lạt</option>
                                    <option value="Thành phố Bảo Lộc">Thành phố Bảo Lộc</option>
                                    <option value="Huyện Di Linh">Huyện Di Linh</option>
                                    <option value="Huyện Đức Trọng">Huyện Đức Trọng</option>
                                    <option value="Huyện Lâm Hà">Huyện Lâm Hà</option>
                                    <option value="Huyện Bảo Lâm">Huyện Bảo Lâm</option>
                                    <option value="Huyện Đơn Dương">Huyện Đơn Dương</option>
                                    <option value="Huyện Đam Rông">Huyện Đam Rông</option>
                                    <option value="Huyện Đạ Tẻh">Huyện Đạ Tẻh</option>
                                    <option value="Huyện Cát Tiên">Huyện Cát Tiên</option>
                                    <option value="Huyện Đạ Huoai">Huyện Đạ Huoai</option>
                                    <option value="Huyện Lạc Dương">Huyện Lạc Dương</option>
                                </select>
                                <label for="Địa chỉ">Địa chỉ</label>
                            </div>
                            <div class="field-wrap">
                                <select name="center" id="center" required>
                                    <option value="Trung tâm học lái 1">Trung tâm học lái 1</option>
                                    <option value="Trung tâm học lái 2">Trung tâm học lái 2</option>
                                    <option value="Trung tâm học lái 3">Trung tâm học lái 3</option>
                                </select>
                                <label for="Trung tâm">Trung tâm</label>
                            </div>
                            <div class="field-wrap">
                                <select name="course" id="course" required>
                                    <option value="Hạng A1">Hạng A1</option>
                                    <option value="Hạng A2">Hạng A2</option>
                                    <option value="Hạng B1">Hạng B1</option>
                                    <option value="Hạng B2">Hạng B2</option>
                                    <option value="Hạng C">Hạng C</option>
                                    <option value="Hạng D">Hạng D</option>
                                    <option value="Hạng E">Hạng E</option>
                                    <option value="Hạng FC">Hạng FC</option>
                                </select>
                                <label for="Khóa học">Khóa học</label>
                            </div>
                            <div class="field-wrap field-wrap-submit">
                                <button type="submit">Đăng ký ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>