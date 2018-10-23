<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic+Coding" rel="stylesheet">
        <link rel="stylesheet" href="vote-thisweek.css?ver=1">
        <link rel="stylesheet" href="my-navbar.css?ver=1">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
        <script>
            
                $(document).ready(function () {
                    $('body').bootstrapMaterialDesign();
                });
            </script>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!-- Bootstrap Material Webframework, Google Material Icons -->
            <title>청원 서비스</title>
        </head>
        <body>
            <div class="background-grid1">
                <div class="background-color01"></div>
                <!--<nav class="navbar sticky-top navbar-expand-lg navbar-light navbar-custom">
                    <a class="navbar-brand" href="index.html">
                        <strong>
                            <span></span>청원 서비스</strong>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="material-icons">notifications</i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.html">
                                    <i class="material-icons">account_circle</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>-->
                <div class="my-navbar">
                    <div class="navbar-container">
                        <span class="brand">
                            <a href="dashboard.php">
                                <strong>청원서비스</strong>
                            </a>
                        </span>
                        <span class="alerm navbar-icon-setting">
                            <em class="material-icons">notifications</em>
                        </span>
                        <span class="account navbar-icon-setting">
							<div class="dropdown pull-xs-right">
						  <button class="btn bmd-btn-icon dropdown-toggle" type="button" id="lr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<em class="material-icons">account_circle</em>
						  </button>
						  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="lr1">
							  
							<a href="my-upload.php"><button class="dropdown-item" type="button">내가 올린 게시물</button></a>
							<a href="setting.php"><button class="dropdown-item" type="button">설정</button></a>
							<a href="report.php"><button class="dropdown-item" type="button">글 신고하기</button></a>
                            <a href="logout_process.php"><button class="dropdown-item" type="button">로그아웃</button></a>
                            <a href="page-for-admin.php"><button class="dropdown-item disabled" type="button">관리자 모드</button></a>
							<div class="dropdown-divider"> </div>
							<a href="contact.php"><a class="dropdown-item" href="#">Contact us</a></a>
							 
						  </div>
						</div>
                        </span>
                    </div>
                </div>
                <!--<span class="school-info row"><p><strong>서울아이티고등학교</strong></p><img src="asset/img/highschool-logo1.png" width="30" height="25"></span>-->
                <div class="postlist">
                    <div class="post-menus">
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">전체</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">최신인기</a>
                            </li>
                            <li class="nav-item nav-active">
                                <a class="nav-link" href="vote-thisweek.html">이주의 청원</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="re-vote.html">청원다시보기</a>
                            </li>
                        </ul>
                    </div>
					<div class="vote-thisweek">
						<div class="row page-title-column">
							<p class="page-title">5월 첫째주 청원</p><!--<div class="custom-icon">?</div>-->
							<a href="#" class="custom-icon" data-toggle="tooltip" data-placement="bottom" title="이주의 청원은 매주 월~금요일 동안 가장 많은 청원동의를 받은 글이 채택되며,
							토~일요일까지 유지됩니다. 갱신일은 매주 토요일 3시입니다.">?</a>
						</div>
						<p class="post-info"><span class="post-title"><strong>테스트 제목</strong></span><span class="post-date">2012-12-12</span></p>
						<p class="post-agree">청원추천 수 <span class="post-agree-count"><strong>20</strong></span></p>
						<div class="post-description">테스트 본문</div>
						
						<div class="input-group mb-3 comment">
						  <select class="custom-select comment-select" id="inputGroupSelect01">
							<option selected>Choose...</option>
							<option value="1">천세진 선생님</option>
							<option value="2">정병남 선생님</option>
							<option value="3">이영중 선생님</option>
						  </select>
						  <input type="text" class="form-control" placeholder="   댓글을 이곳에 작성하세요." aria-label="Recipient's username" aria-describedby="basic-addon2">
						  <div class="input-group-append">
							<button type="submit" class="btn btn-primary comment-submit">전송</button>
						  </div>
						</div>
						
						<div class="comment-box">
							<p class="comments">
							<span class="comment-name"><strong>천세진 선생님</strong>
							<em class="material-icons icon-check">check_circle</em></span>&nbsp;&nbsp;<span class="comment-description">댓글 테스트</span>
							</p>
						</div>
						
						
					</div>
					<span class="school-info"><strong>서울아이티고등학교</strong><img src="asset/img/highschool-logo1.png" width="25" height="22" class="img-setting01"></span>
            	</div>
        	</div>
    </div>
	<script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>
</body>
</html>