<?php

   require_once "function/phone_function.php";
   require_once "function/age_function.php";
   require_once "function/sex_function.php";
?>

<div class="row m-t-5">
    <div class="col-xs-5">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-xs-12 text-center">
                    <label><i class="fas fa-id-card-alt"></i>
                        ข้อมูลสมาชิก</label></div>
            </div>
            <div class="modal-body ">
                <div class="row m-t--15">
                    <div class="well profile">
                        <div class="col-xs-5 text-center m-t-15">
                            <figure>
                                <img src="/imageuser/<?=$profile['MEMBER_PROFILE_PICTURE'];?>" alt="" class="img-circle img-responsive">
                            </figure>
                        </div>
                        <div class="col-xs-7">
                            <h4><strong><?=$profile['MEMBER_NAME'];?></strong></h4>
                            <p><strong>Sex : </strong><?=getSex($profile['MEMBER_GENDER'],"en");?></p>
                            <p class="m-t--10"><strong>Age : </strong><?=getAge($profile['MEMBER_BIRTHDATE']);?></p>
                            <p class="m-t--10"><strong>Phone
                                    : </strong> <?=phone_format($profile['MEMBER_PHONE']);?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-header m-t--40">
                <div class="col-xs-12 text-center">
                    <label><i class="fas fa-bars"></i>
                        เมนูผู้ใช้งาน</label></div>
            </div>
            <div class="modal-body">
                <div class="row m-t--20">
                    <a href="?content=createroom"><button id="btn-createroom" class="btn btn-success btn-lg col-xs-12" style="border-radius: 0px;"><i class="fas fa-layer-group"></i> สร้างห้อง</button></a>
                    <button id="btn-searchroom" class="btn btn-warning btn-lg col-xs-12" style="border-radius: 0px;"><i class="fas fa-search"></i> ค้นหาห้อง</button>
                    <a href="/promotion/userpromotion.php"><button id="btn-promotion" class="btn btn-info btn-lg col-xs-12" style="border-radius: 0px;"><i class="fas fa-gift"></i> โปรโมชั่น</button></a>
                    <a href="?action=logout"><button class="btn btn-danger btn-lg col-xs-12" style="border-radius: 0px;"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</button></a>
                </div>
            </div>
            <div class="modal-footer m-t--15">

            </div>
        </div>
    </div>
    <div class="col-xs-7">
        <div id="room_pop">

        </div>
    </div>
</div>