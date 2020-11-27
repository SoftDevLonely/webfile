<?php
    require_once "../config/config.inc.php";
    require_once "../function/db_function.php";
    require_once "../function/datetime_function.php";
    $room_list_sql = "SELECT * FROM room WHERE room.ROOM_TIMEEND_MEETING > NOW()";
    $room_query = mysqli_query($con_mysqli,$room_list_sql);



?>
<div class="modal-content">
    <div class="modal-header">
        <div class="row">
            <div class="col-xs-12 text-center">
                <label><i class="fas fa-users"></i>
                    กลุ่มแนะนำ</label>
            </div>
        </div>
    </div>
    <?php 
    while ($room_list = mysqli_fetch_array($room_query)){ 
        $mentor_id = $room_list['MEMBER_ID'];
        $room_id = $room_list['ROOM_ID'];
        $mentor = select_mysqli("member","WHERE MEMBER_ID = '$mentor_id'","*");

        $count_member_room = rows_mysqli("room_join","WHERE ROOM_ID = '$room_id'","*");
        ?>
        

    <div class="modal-body m-t--10">
        <div class="row">
            <div class="col-xs-2 m-t-15 m-l-10">
                <figure>
                    <img src="/imageuser/<?=$mentor['MEMBER_PROFILE_PICTURE'];?>" alt="" class="circle-img1 img-responsive">
                </figure>
            </div>
            <div class="col-xs-7">
                <h4><?=$room_list['ROOM_NAME'];?></h4>
                <p class="m-t--10"><small><?=$room_list['ROOM_DETAIL'];?></small></p>
                <p class="m-t--10"><?=$mentor['MEMBER_NAME'];?></p>
                <p class="m-t--10"><?=DateTimeFormat_short($room_list['ROOM_TIMEEND_MEETING'],"EN");?> (<?=$count_member_room;?>/<?=$room_list['ROOM_MAXIMUM_MEMBER'];?>) คน</p>
            </div>
            <div class="col-xs-3 m-r--20">
                <p>UID: <?=$room_list['ROOM_ID'];?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-9">
                <div class="row m-t-5">
                    <div class="col-xs-3">
                    </div>
                    <?php
                    $member_list_sql = "SELECT * FROM member,room_join WHERE member.MEMBER_ID = room_join.MEMBER_ID AND room_join.ROOM_ID = '$room_id' LIMIT 0,5";
                    $member_list_query = mysqli_query($con_mysqli,$member_list_sql);
                    $num_member_list = 0;
                    while($member_list = mysqli_fetch_array($member_list_query)){ $num_member_list+=1;
                     ?>
                    <div class="col-xs-2 <?=($num_member_list>1) ? 'm-l--20' : '';?>">
                        <img src="/resource/img/78304597_p0.jpg" alt="" class="img-circle img-responsive">
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-xs-3 m-t-10 text-center">
                <a href="/ajax/joinroombtn.php?room_id=<?=$room_list['ROOM_ID'];?>"><button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> เข้าร่วม
                    </button></a>
            </div>
        </div>
    </div>
    <hr>
    <?php } ?>
</div>