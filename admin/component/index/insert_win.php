<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../layui/css/layui.css">
	<title>科大企训网后台</title>
</head>
		<?php require_once '../connect.php' ?>
		<div class="layui-container">
			<div class="layui-row">
				<div class="layui-md12 layui-anim layui-anim-up" style="padding: 10px;">
					<form class="layui-form layui-form-pane" action="insert.php" method="post">
						<div class="layui-form-item">
							<label class="layui-form-label">编号</label>
							<div class="layui-input-block">
								<input class="layui-input" type="text" name="no" required  lay-verify="required" placeholder="请输入编号">
							</div>
						</div>
						<div class="layui-form-item">
							<label class="layui-form-label">热门咨询</label>
							<div class="layui-input-block">
								<input type="radio" name="hot" value="yes" title="YES">
								<input type="radio" name="hot" value="no" title="NO" checked>
							</div>
						</div>
						<div class="layui-form-item">
							<label class="layui-form-label">图片地址</label>
							<div class="layui-input-block">
								<input class="layui-input" type="text" name="image" required  lay-verify="required" placeholder="请输入图片地址">
							</div>
						</div>
						<div class="layui-form-item">
							<label class="layui-form-label">标题</label>
							<div class="layui-input-block">
								<input class="layui-input" type="text" name="title" required  lay-verify="required" placeholder="请输入新闻标题名称">
							</div>
						</div>
						<div class="layui-form-item">
							<label class="layui-form-label">内容</label>
							<div class="layui-input-block">
								<input class="layui-input" type="text" name="content" placeholder="请输入新闻内容">
							</div>
						</div>
						<div class="layui-form-item">
							<label class="layui-form-label">时间</label>
							<div class="layui-input-block">
								<input class="layui-input" type="text" name="date" placeholder="请输入日期">
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
	layui.use('element', function(){
	  var element = layui.element;

	});
	</script>
</html>