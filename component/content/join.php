<?php
    $profile_id = $_SESSION['LOGIN'];
    $result_room = select_mysqli("room_join","WHERE MEMBER_ID = '$profile_id'","*");
    if(isset($result_room['ROOM_ID'])){
        $_SESSION['ROOM_ID'] = $result_room['ROOM_ID'];
    }
    if(isset($_SESSION['ROOM_ID'])){ ?>

<div class="row m-t-5">
    <div class="col-xs-12">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-xs-12 text-center">
                    <label><i class="fas fa-id-card-alt"></i>
                        ห้อง</label></div>
            </div>
            <div class="modal-body ">
                
            </div>
                <a href="/ajax/leaveroom.php"><button id="btn-leaveroom" class="btn btn-warning btn-lg col-xs-12" style="border-radius: 0px;"><i class="fas fa-sign-out-alt"></i>ออกจากห้อง</button></a>
        </div>
    </div>
</div>

<?php 

    }else{
        //header("Location: /");
    }
?>