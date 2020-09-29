<div class="awe-res-popup-reservation">
    <div class="awe-res-popup-reservation-content">

        <div class="restbeef_block restbeef_js_margin restbeef_intro_block">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 align_center awe-desc-wrap-css">
                    <p><?php echo !empty($atts['awe_reservation_desc']) ? $atts['awe_reservation_desc'] : '' ?></p>
                </div>
                <div class="col-3"></div>
            </div>
        </div>

        <div class="restbeef_block restbeef_js_margin" data-margin="0 0 90px 0">
        <div class="restbeef_block_inner awe-form-reservation-wrap">
            <form name="reservation" class="restbeef_reservation_form" id="reservation_form" method="post">
                <div class="row">
                    <div class="col-4">
                        <input type="date" data-placeholder="Ngày đặt bàn" name="your_date"/>
                    </div><!-- .col-4 -->
                    <div class="col-4">
                        <div class="row">
                            <div class="col-6">
                                <select name="your_time">
                                    <option value="0">Sáng</option>
                                    <option value="1">Tối</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="hour">
                                    <option value="11h00">11:00</option>
                                    <option value="11h30">11:30</option>
                                    <option value="12h00">12:00</option>
                                    <option value="12h30">12:30</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-6">
                                <input type="number" min="1" name="number_adult" placeholder="Số người lớn">
                            </div>
                            <div class="col-6">
                                <input type="number" min="0" name="number_child" placeholder="Số trẻ em">
                            </div>
                        </div>
                    </div><!-- .col-4 -->
                </div><!-- .row -->
                <div class="row">
                    <div class="col-4">
                        <input type="text" placeholder="Họ và tên" name="your_name"/>
                    </div><!-- .col-4 -->
                    <div class="col-4">
                        <input type="email" placeholder="Địa chỉ email" name="your_email"/>
                    </div><!-- .col-4 -->
                    <div class="col-4">
                        <input type="tel" placeholder="Số điện thoại" name="your_phone"/>
                    </div><!-- .col-4 -->
                </div><!-- .row -->
                <textarea placeholder="Yêu cầu thêm" name="your_text"></textarea>
                <input type="submit" value="Submit your reservation"/>
            </form>
        </div>
    </div>

        <a href="#" class="close awe-close-popup"></a>
    </div>

</div>