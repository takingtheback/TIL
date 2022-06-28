// 첫 요소 강제 시작
$('.faq-content').eq(0).show()
$('.faq-title').eq(0).addClass('active')
// title active
$('.faq-title').click(function() {
    $(this).addClass('active')
    // 형제 요소 .faq-title 의 active 클래스 삭제
    $(this).siblings('.faq-title').removeClass('active')
    // .faq-title의 다음 요소 display
    $(this).next().slideDown() 
    // 그 외 요소 다른 요소 제거
    $(this).siblings('.faq-title').next().slideUp()
})