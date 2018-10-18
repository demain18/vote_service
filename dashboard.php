<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic+Coding" rel="stylesheet">
        <link rel="stylesheet" href="dashboard.css">
        <link rel="stylesheet" href="my-navbar.css">
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
                <div class="my-navbar">
                    <div class="navbar-container">
                        <span class="brand">
                            <a href="index.html">
                                <strong>청원서비스</strong>
                            </a>
                        </span>
                        <span class="alerm navbar-icon-setting">
                            <em class="material-icons">notifications</em>
                        </span>
                        <span class="account navbar-icon-setting">
                            <a href="login.html">
                                <em class="material-icons">account_circle</em>
                            </a>
                        </span>
                    </div>
                </div>
                <!--<span class="school-info row"><p><strong>서울아이티고등학교</strong></p><img src="asset/img/highschool-logo1.png" width="30" height="25"></span>-->
                <div class="postlist">
                    <a href="writing.html">
                        <button type="button" class="btn btn-raised btn-primary btn-write">글 쓰기<em class="material-icons icon-set02">edit</em>
                        </button>
                    </a>
                    <h5 class="board-title">
                        <strong>최다 추천 청원 목록</strong>
                    </h5>
                    <div class="post-menus">
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item">
                                <a class="nav-link" href="#">전체</a>
                            </li>
                            <li class="nav-item nav-active">
                                <a class="nav-link" href="#">최신인기</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">청원투표</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">청원다시보기</a>
                            </li>
                        </ul>
                    </div>

                    <p class="menu-list">
                        <span class="menu menu01">번호</span>
                        <span class="menu menu02">제목</span>
                        <span class="menu menu03">청원일</span>
                        <span class="menu menu04">참여인원</span>
                    </p>
                    <div class="post-grid">

					<div class="col-md-6 col-sm-6 accordion-margin">
						<div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
                          <?php
                          $servername = "localhost";
                          $username = "root"; // your username
                          $password = "1234"; // your password
                          $conn = mysqli_connect($servername, $username, $password, "voteservice");
                          
                          $sql = "SELECT * FROM post";
                          $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
                          $post = mysqli_fetch_array($result);
                          echo $post['name'];

                          $sql = "SELECT * FROM ar";
                          $result = mysqli_query($conn, $sql);
                          while($weapon = mysqli_fetch_array($result)) {
                            echo '<h3>'.$weapon['name'].'</h3>';
                            echo '<p>Damage : '.$weapon['damage'].'</p>';
                            echo '<p>Bullets : '.$weapon['bullet_count'].'</p>';
                            echo '<p>Bullet Type : '.$weapon['bullet_type'].'</p>';
                          }
                          /*
                            $sql = "SELECT * FROM post";
                            $result = mysqli_query($conn, $sql);
                            while($post = mysqli_fetch_array($result)) {
                                echo '
                            <div class="panel">
							<div class="panel-heading" role="tab" id="headingOne">
							  <h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTest" aria-expanded="true" aria-controls="collapseOne">
							  <p class="post post-number01">
								<span class="post-number">4</span>
								<span class="post-name">'.$post['title'].'</span>
								<span class="post-upload-date">'.$post['date'].'</span>
								<span class="post-like">
									<strong>'.$post['agree_count'].'</strong>
								</span>
							</p>
							</a>
						  </h4>
							</div>
							<div id="collapseTest" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							  <div class="panel-body">
								<p class="post-text">'.$post['description'].'</p>
								<button type="button" class="btn btn-primary vote-agree">청원동의</button>
							  </div>
							</div>
						  </div>
                            ';
                            }
                            */
                          ?>
						</div>
					  </div>
                    </div>
			<span class="school-info"><strong>서울아이티고등학교</strong><img src="asset/img/highschool-logo1.png" width="25" height="22" class="img-setting01"></span>
        </div>
    </div>
</body>
</html>