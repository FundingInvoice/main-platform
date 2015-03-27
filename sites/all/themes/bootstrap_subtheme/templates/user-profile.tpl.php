<div class="profile"<?php print $attributes; ?>>
  <?php //print render($user_profile); ?>
  <?php global $user; ?>  
</div>


<?php if (!empty($user->roles[3])) { ?>
<div class="add-inv-link userStatus pull-right">
    <a href="/user-status-list"> User's Status </a>
</div>
<div class="add-inv-link userStatus pull-right">
    <a href="/admin/invoice-approve"> Invoice's Status </a>
</div>
<?php } ?>

<div class="member-details">
   
    <?php
    if ($user->picture == 0) {
        print "<div class='user-picture'><img src='/sites/all/themes/bootstrap_subtheme/images/avtar.png'> <span class='user_name_pf'>". $user->name ." </span></div>";
    } else {
    print "<div class='user-picture'>".theme('user_picture', array('account' =>$user))."<span class='user_name_pf'>".$user->name."</span></div>";
    }
    ?>
    
    <div id="mem_type">
    <?php 
    $user_role = '';
    if (!empty($user->roles[5]) && !empty($user->roles[6])) {
		
        print "<span class='mem_type_icon'></span><div class='clct_mt'> <div class='mem_type_text'> Member Type:</div> <div class='inve_seller'>".$user->roles[5]."/".$user->roles[6].'</div></div>';
    } elseif(!empty($user->roles[5])) {
        print "<span class='mem_type_icon'></span><div class='clct_mt'> <div class='mem_type_text'> Member Type: </div><div class='seller_tpye'>".$user->roles[5].'</div></div>';
    } elseif(!empty($user->roles[6])) {
        print "<span class='mem_type_icon'></span> <div class='clct_mt'><div class='mem_type_text'> Member Type:</div><div class='investor_tpye'> ".$user->roles[6].'</div></div>';
    }elseif(!empty($user->roles[3])) {
        print "<span class='mem_type_icon'></span> <div class='clct_mt'><div class='mem_type_text'> Member Type:</div><div class='investor_tpye'> ".$user->roles[3].'</div></div>';
    }
    ?>
    </div>
    
    <div id="mem_since">
    <?php
    print "<span class='mem_since_icon'></span><div class='clct_mt'> <div class='mem_since_text'> Member since:</div><div class='m-d-y'> ".date( "d M,  Y",$user->created).'</div></div>';
    ?>
    </div>
    
</div>
<?php if (!empty($user->roles[6])) { ?>
<div class="add-inv-link pull-right">
    
   
   
   <a href="/node/add/invoice"> Add Invoice <i class='fa fa-plus'></i></a>
   
    
</div>
<?php } ?>
<?php if (!empty($user->roles[5])) { ?>

<div class="add-inv-link pull-right">
 <a href="/invoice-list"> Search Invoice <i class='fa fa-search'></i></a>
</div>

<?php } ?>
<div class="profileview">
    <?php 
      
      //print views_embed_view('your_invoice_list', 'block', $user->uid); 
    ?>
   <?php if (!empty($user->roles[6])) { 
    $perinv = module_invoke('quicktabs', 'block_view', 'seller_own_invoice_list_show_on_');
    print render($perinv);
}
?>
    <?php 
     print views_embed_view('personal_investor_bid_list_shown_on_his_profile', 'block', $user->uid); 
    ?>
    <?php
     //for admin user
    print views_embed_view('show_all_invoice_list_to_admin', 'block', $user->uid);
    ?>
</div>