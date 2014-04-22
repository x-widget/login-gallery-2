<div class='login-box-mobile'>
	<div class='login-box-middle'>
		<form name="foutlogin" action="<?=url_login_check()?>" onsubmit="return fhead_submit(this);" method="post" autocomplete="off">
			<input type="hidden" name="url" value="<?php echo $outlogin_url ?>">
		
			<div  class='login-input'>
				<div class='login-user'>
					<input type="text" id="ol_id" name="mb_id" required  maxlength="20" placeholder='아이디'>
				</div>			
				<div class='login-pass'>
					<input type="password" name="mb_password" id="ol_pw" required maxlength="20" placeholder='비밀번호'>
				</div>
				<div style='clear:both'></div>
			</div>
			<div class='submit-button'>
				<input type="image" id="ol_submit" src='<?=$widget_config['url']?>/signin_button.png' />				
			</div>
			<div style='clear:both'></div>
			<div class='register_autologin'>
				<span class='auto_login'><input type="checkbox" name="auto_login" value="1" id="auto_login">자동 로그인</span>
				<a href='<?=G5_URL?>/<?=G5_BBS_DIR?>/register.php' class='login-reg'><b>회원가입</b></a>
				<a href="<?php echo G5_BBS_URL ?>/password_lost.php" id="ol_password_lost">아이디/비번 찾기</a>
				<div style='clear:both;'></div>
			</div>
										
		</form>
		<div style='clear:both'></div>
	</div>
</div>