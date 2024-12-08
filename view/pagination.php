
    <div class="pagination">
        <?php for($i=$min;$i<=$lis;$i++){
            if($i==$a){?>
                <a href="tchattrait.php?a=<?=$i?>" class="active"><?=$i?></a>
            <?php }
            else{?>
                <a href="tchattrait.php?a=<?=$i?>"><?=$i?></a>
            <?php }
            ?>   
        <?php }?>
    </div>