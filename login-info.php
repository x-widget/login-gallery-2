<div class='login-box logout-community3'>
	<div style='border-bottom: solid 1px #444444; padding-bottom: 8px;'>
	<div class='user-info'>
	
			<div class='user-admin'>
				<span class='edit_profile'><a href="<?=url_bbs()?>/member_confirm.php?url=register_form.php">내 프로필</a></span>
				<? if ($is_admin == 'super') {  ?>
					<span class='admin_link'><a href="<?=x::url_admin()?>">X ADMIN</a><br><a href="<?=g::url()?>/adm">ADMIN</a></span>
				<? }
					else {?>
					<span class='user-scrap'>
							<a href="<?=url_bbs()?>/scrap.php" target="_blank" class='user-scrap'>스크랩</a>
					</span>
				<?}
				?>
				<div style='clear: both'></div>
			</div>
		
		<div class='user-meta'>
			<span class='user-icon-points'>
				<span class='user-message'>
					<img src='<?=$widget_config['url']?>/msg-icon.png'/>
					<a href="<?=url_bbs()?>/memo.php" target="_blank" class='user_memo'>쪽지 <span class='memo-not-read'>[<?=$memo_not_read?>] </span></a>
			
				</span>
				<br>
				<span class='user-points'>
					<img src='<?=$widget_config['url']?>/star-icon.png'/>
					<? if ( admin() ) {?>
						<a href="<?=url_site_config()?>" class='user-win'>사이트 관리</a>
					<? }
						else {?>	
							<a href="<?=url_bbs()?>/point.php" target="_blank" class='user-win'>포인트</a> <?=$point?>
					<? }?>
				</span>
			</span>
			
		</div>
		</div>

	<div class='log_out'>
		<a href="<?=url_bbs()?>/logout.php"><img src='<?=$widget_config['url']?>/signout_button.png'/></a>
	</div>

	<div style='clear: both'></div>
		</div>
	<? if ($is_admin != 'super') {  ?>
			<div class='user-logged-name'><?=$nick?>님 로그인</div>
	<? }?>
</div> 