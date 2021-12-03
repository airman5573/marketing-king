function share_fb() {
  const url = window.location.href;
  window.open('https://www.facebook.com/sharer/sharer.php?u='+url,'facebook-share-dialog',"width=626, height=436")
}

function kakaoShare() {
  const representativeImg = document.getElementsByClassName("representative-img")[0];
  console.log("imgUrl :", representativeImg.src);
  const url = window.location.href;
  const firstP = document.getElementsByTagName("p")[0];
  const secondP = document.getElementsByTagName("p")[1];
  Kakao.init('e38991246e5343d2d1a2a352ec70487a');
  Kakao.Link.sendDefault({
    objectType: 'feed',
    content: {
      title: document.title,
      description: `${firstP.innerText} ${secondP.innerText}`,
      imageUrl: representativeImg.src,
      link: {
        mobileWebUrl: url,
        webUrl: `${url.replace('m.', '')}.php`,
      },
    },
    buttons: [
      {
        title: '자세히 보기',
        link: {
          mobileWebUrl: url,
          webUrl: `${url.replace('m.', '')}.php`,
        },
      },
    ],
    // 카카오톡 미설치 시 카카오톡 설치 경로이동
    installTalk: true,
  })
}