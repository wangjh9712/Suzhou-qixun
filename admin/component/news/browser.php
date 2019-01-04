<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../layui/css/layui.css">
	<title>科大企训网后台</title>
	<style>
        .fly-search {
			position: absolute;
			right:16px;
			top:12px;
			background-color: white;
        }
    </style>
</head>
		<?php
		require_once '../connect.php';
		$key=$_GET["key"];
		$sql="select * from news where title like '%$key%' or content like '%$key%' or date like '%$key%'";
		$result=mysqli_query($conn,$sql);
		?>
		<div class="layui-container">
			<div class="layui-row">
				<div class="layui-md12">
					<table class="layui-table layui-anim layui-anim-scaleSpring" lay-skin="row" style="border: 0px;">
						<colgroup>
							<col width="60">
						</colgroup>
						<tr>
							<td colspan="4" style="text-align: center">
								<a href="insert_win.php">
									<button class="layui-btu layui-btn-radius layui-btn-primary layui-btn-lg" style="border: 0px; cursor: pointer">
										<i class="layui-icon layui-icon-add-circle"></i>添加资讯
									</button>
								</a>
							</td>
							<td colspan="4" style="text-align: center">
								<form name="query" method="get" action="">
									<input class="layui-input" style="width: 360px;" placeholder="输入查询关键字，回车跳转" type="text" name="key"/>
									<button class="layui-btn layui-btn-primary fly-search">
										<i class="layui-icon layui-icon-search "></i>
									</button>
									<!--<i class="layui-icon layui-icon-search fly-search"></i>-->
								</form>
							</td>
						</tr>
						<tr>
							<td style="text-align: center">编号</td>
							<td style="text-align: center">图片地址</td>
							<td style="text-align: center">标题</td>
							<td style="text-align: center">内容</td>
							<td style="text-align: center">时间</td>
							<td style="text-align: center">热门</td>
							<td style="text-align: center">修改</td>
							<td style="text-align: center">删除</td>
						</tr>
						<?php
						while($row=mysqli_fetch_array($result)){
							echo "<tr>";
							echo "<td>".$row['no']."</td>";
							echo "<td>".$row['image']."</td>";
							echo "<td>".$row['title']."</td>";
							echo "<td>".$row['content']."</td>";
							echo "<td>".$row['date']."</td>";
							echo "<td>".$row['hot']."</td>";
							$no = $row['no'];
							echo "<td style='text-align: center'>
									<a href='update_win.php?no=$no'>
										 <button class='llayui-btu layui-btn-radius layui-btn-primary layui-btn-lg' style='border: 0px; cursor: pointer'>
											<i class='layui-icon layui-icon-edit'></i>
										 </button>
									 </a>
								  </td>";
							echo "<td style='text-align: center'>
									<a href=javascript:if(confirm('确定删除？'))location='delete.php?no=$no'>
										<button class='layui-btu layui-btn-radius layui-btn-primary layui-btn-lg' style='border: 0px; cursor: pointer'>
											<i class='layui-icon layui-icon-delete'></i>
										</button>
									 </a>
								  </td>";
							echo "</tr>";
						}
						?>
					</table>
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