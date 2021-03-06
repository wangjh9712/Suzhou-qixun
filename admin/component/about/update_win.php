<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../layui/css/layui.css">
	<title>科大企训网后台</title>
</head>
		<?php 
		require_once '../connect.php';
		$no=$_GET['xuhao'];
		$sql="select * from about where xuhao='$no'";
		$result=mysqli_query($conn,$sql) or die("数据查询失败");
		$row=mysqli_fetch_assoc($result);
		?>
		<div class="layui-container">
			<div class="layui-row">
				<div class="layui-md12 layui-anim layui-anim-fadein" style="padding: 10px;">
					<form class="layui-form layui-form-pane" action="update.php" method="post">
						<div class="layui-form-item">
							<label class="layui-form-label">编号</label>
							<div class="layui-input-block">
								<input readonly="yes" class="layui-input" type="text" name="xuhao" required lay-verify="required" value="<?php echo $row['xuhao']?>">
							</div>
						</div>
						<div class="layui-form-item">
							<label class="layui-form-label">标题</label>
							<div class="layui-input-block">
								<input class="layui-input" type="text" name="title" required lay-verify="required" value="<?php echo $row['title']?>">
							</div>
						</div>
						<div class="layui-form-item layui-form-text">
							<label class="layui-form-label">内容</label>
							<div class="layui-input-block">
								<textarea style="height: 300px;" class="layui-input" type="text" id="content" name="content"><?php echo $row['content']?></textarea>
							</div>
						</div>
						<div class="layui-form-item">
							<div class="layui-input-block">
								<button class="layui-btn layui-btn-primary" lay-submit lay-filter="formDemo">立即提交</button>
								<button type="reset" class="layui-btn layui-btn-primary">重置</button>
							</div>	
						</div>
					</form>
				</div>
			</div>
		</div>
	<script src="../../layui/layui.all.js"></script>
	<script>
	//JavaScript代码区域
	layui.use(['element','layedit'], function(){
	  var element = layui.element;
	  var layedit = layui.layedit;
	  layedit.build('content');
	});
	</script>
</html>