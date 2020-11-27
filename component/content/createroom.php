<div class="row m-t-5">
    <div class="col-xs-12">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <form id="create_room" class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="form-group col-xs-7">
                                    <p style="font-weight: bold" class="m-l-15"><i class="fas fa-bars"></i>
                                        สร้างห้อง</p>
                                </div>
                                <div class="form-group col-xs-5 text-right">
                                    <button type="submit" id="btn-createroom-sb" name="btn-createroom-sb" class="btn btn-success"><i class="fas fa-plus"></i> สร้างห้อง
                                    </button>
                                    <a href="/" class="btn btn-warning m-r--35"><i class="fas fa-times"></i>
                                        ยกเลิก</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">ชื่อห้อง</label>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control" id="inputName" name="inputName" placeholder="ชื่อห้อง ความยาวไม่เกิน 25 ตัวอักษร" maxlength="25" required autocomplete="off" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">สถานที่</label>
                                        <div class="col-xs-4">
                                            <input type="text" class="form-control" id="inputLocation" name="inputLocation" placeholder="ชื่อสถานที่" maxlength="255" required autocomplete="off" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">จำนวนคนสูงสุด</label>
                                        <div class="col-xs-4">
                                            <select id="inputTypeMax" name="inputTypeMax" class="custom-select form-control" required>
                                                <option value="" disabled selected>เลือกจำนวนคนสูงสุด</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">การจำกัดเพศ</label>
                                        <div class="col-xs-4">
                                            <select id="inputTypeSex" name="inputTypeSex" class="custom-select form-control" required>
                                                <option value="" disabled selected>เลือกการจำกัดเพศ</option>
                                                <option value="1">ชายเท่านั้น</option>
                                                <option value="2">หญิงเท่านั้น</option>
                                                <option value="3">ไม่จำกัดเพศ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">การจำกัดอายุ</label>
                                        <div class="col-xs-4">
                                            <select id="inputTypeAgeStart" name="inputTypeAgeStart" class="custom-select form-control" required>
                                                <option value="" disabled selected>ช่วงอายุเริ่มต้น</option>ป
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-4">
                                            <select id="inputTypeAgeEnd" name="inputTypeAgeEnd" class="custom-select form-control" required>
                                            <option value="" disabled selected>ช่วงอายุสิ้นสุด</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">รายละเอียด</label>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control" id="inputDetail" name="inputDetail" placeholder="รายละเอียด" maxlength="100" required autocomplete="off" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">ระยะเวลา</label>
                                        <div class="col-xs-4">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addondatestart"">เริ่มต้น</span>
                                                <input type=" text" name="date-start" id="date-start" class="datepicker form-control text-center" placeholder="" aria-describedby="basic-addondatestart" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addondateend"">สิ้นสุด</span>
                                                <input type=" text" name="date-end" id="date-end" class="datepicker form-control text-center" placeholder="" aria-describedby="basic-addondateend" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>