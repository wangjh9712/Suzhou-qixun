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
		$sql="SELECT * FROM myindex ORDER BY no ASC";
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
							<td colspan="6" style="text-align: center">
								<a href="insert_win.php">
									<button class="layui-btu layui-btn-radius layui-btn-primary layui-btn-lg" style="border: 0px; cursor: pointer">
										<i class="layui-icon layui-icon-add-circle"></i>添加轮播图
									</button>
								</a>
							</td>
						</tr>
						<tr>
							<td style="text-align: center">编号</td>
							<td style="text-align: center">图片地址</td>
							<td style="text-align: center">图片</td>
							<td style="text-align: center">背景颜色</td>
							<td style="text-align: center">修改</td>
							<td style="text-align: center">删除</td>
						</tr>
						<?php
						while($row=mysqli_fetch_array($result)){
							echo "<tr>";
							echo "<td align='center'>".$row['no']."</td>";
							echo "<td align='center'>".$row['carousel_img']."</td>";
							echo "<td align='center'><img src='../../../".$row['carousel_img']."' style='max-width: 450px;'></td>";
							echo "<td align='center'><div style='height: 50px; width: 80px; background-color:".$row['carousel_color']."'></div></td>";
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