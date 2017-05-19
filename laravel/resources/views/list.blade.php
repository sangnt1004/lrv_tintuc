<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="QuocTuan.Info" />
    <link rel="stylesheet" href="backend\templates\css\style.css" />
	<title>Admin Area :: Quản Lý User</title>
</head>

<body>
<div id="layout">
    <div id="top">
        Admin Area :: Quản Lý Tin
    </div>
        <div id="menu">
            <table width="100%">
                <tr>
                    <td>
                        <a href="">Trang chính</a> | <a href="">Thêm tin</a>
                    </td>
                    <td align="right">
                        Xin chào admin | <a href="">Logout</a>
                    </td>
                </tr>
            </table>
        </div>
    <div id="main">
		<table class="list_table">
			<tr class="list_heading">
				<td class="id_col">STT</td>
				<td>Tiêu Đề</td>
				<td>Tác Giả</td>
				<td>Thời Gian</td>
				<td class="action_col">Quản lý?</td>
			</tr>
            @foreach ($tintuc as $item)
			<tr class="list_data">
                <td class="aligncenter">{{$loop->iteration }}</td>
                <td class="list_td aligncenter">{{ $item["tieude"] }}</td>
                <td class="list_td aligncenter">{{ $item["tacgia"] }}</td>
				<td class="list_td aligncenter">{{ $item["created_at"] }}</td>
                <td class="list_td aligncenter">
                    <a href="{{route('edit',['id' => $item["id"]]) }}"><img src="backend\images\edit.png" /></a>&nbsp;&nbsp;&nbsp;
                    <a href="{{route('destroy',['id' => $item["id"]]) }}"><img src="backend\images\delete.png" /></a>
                </td>
            </tr>
            @endforeach
			
		</table>
	</div>
    <div id="bottom">
       Copyright © 2016 by QuocTuan.Info & QHOnline.Edu.Vn 
    </div>
</div>

</body>
</html>