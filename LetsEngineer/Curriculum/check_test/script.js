const item = document.querySelector('.mainImg');

const keyframe_1 = {
  opacity: [0, 1]
};

const option_1 = {
  duration: 1800,
  fill: 'forwards',
};

item.animate(keyframe_1,option_1);

//4つの理由
const showUpitem = (entries) => {
const fourreasons_item = document.querySelectorAll('.four_reasons_content');
console.log(fourreasons_item);

for (let i = 0; i < fourreasons_item.length; i++) {
  const keyframe_2 = {
    opacity: [0, 1],
    translate: ['0 50px',0],
  };
  
  const option_2 = {
    duration: 600,
    delay: i * 1000,
    fill: 'forwards',
  };

  fourreasons_item[i].animate(keyframe_2,option_2);

  };
  //console.log (entries[0],target);
};

const observer = new IntersectionObserver(showUpitem);

observer.observe(document.querySelector('#four_reasons'));
