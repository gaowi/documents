<?php include('tpl/header.php'); include('tpl/navTop.php'); include('tpl/navLeft.php'); ?>
	<div class="content ">
		<div class="body-inner br-s">
			<!--面包屑-->
			<div id="crumb" class="crumb br-s">
				<ul class="s-n text-12 text-l-s-1 gray6">
					<li><ng ng-bind="crumbsOne"></ng><i ng-if="crumbsTwo?true:false" class="fa fa-angle-right m-0-5"></i></li>
					<li><ng ng-bind="crumbsTwo"></ng><i ng-if="crumbsThree?true:false" class="fa fa-angle-right m-0-5"></i></li>		
					<li><ng ng-bind="crumbsThree"></ng></li>		
				</ul>
			</div>
			<!--内容-->
			<div class="centre-content p-0-30 check-on">
				<blockquote class="text-quote mt20">
					js 随机数
               				 </blockquote>

				<div class="text-16 m-20-0">
					<a href="../image/word/Math.png" target="_blank" class="mt20"><img class="w600" src="../image/word/Math.png" alt=""></a>
				</div>
			</div>
		</div>
		<!--底部-->
	</div>
<?php include('tpl/footer.php'); ?>
<script>	
	seajs.use([base.jsUrl + 'index',base.jsUrl + 'plug_in/theme/theme',base.jsUrl + 'plug_in/nav_list/nav']);
</script>
</body>
</html>