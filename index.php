<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra trắc nghiệm</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <div class="start_btn"><button>Bắt đầu</button></div>
    <div class="info_box">
        <div class="info-title"><span>Quy định</span></div>
        <div class="info-list">
            <div class="info">1. Bạn có  <span>30 giây</span> cho mỗi câu hỏi.</div>
            <div class="info">2. Sau khi bạn chọn câu trả lời của mình, bạn không thể thay đổi câu trả lời.</div>
            <div class="info">3. Bạn không thể chọn phương án khác khi hết thời gian.</div>
            <div class="info">4. Bạn không thể thoát khi đang thực hiện bài test.</div>
            <div class="info">5. Điểm sẽ tính dựa trên số câu trả lời đúng.</div>
        </div>
        <div class="buttons">
            <button class="quit">Thoát</button>
            <button class="restart">Tiếp tục</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Trắc nghiệm</div>
            <div class="timer">
                <div class="time_left_txt">Thời gian</div>
                <div class="timer_sec">30</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">

            </div>
            <div class="option_list">
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
            </div>
            <button class="next_btn">Tiếp theo</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Chúc mừng bạn đã hoàn thành bài test!</div>
        <div class="score_text">
        </div>
        <div class="buttons">
            <button class="restart">Chơi lại</button>
            <button class="quit">Thoát</button>
        </div>
    </div>

    <script src="questions.js"></script>
    <script src="script.js"></script>

</body>
</html>