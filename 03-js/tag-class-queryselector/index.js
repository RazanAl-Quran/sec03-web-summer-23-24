function changeBackground() {
    // let allPs = document.getElementsByTagName('p');
    // let allPs = document.getElementsByClassName('matrix');
    let allPs = document.querySelectorAll('.matrix');
    console.log(allPs);

    allPs[0].style.backgroundColor = 'aqua';
    allPs[1].style.backgroundColor = 'yellow';
    allPs[2].style.backgroundColor = 'green';
    
}

function reset() {
      let allPs = document.getElementsByTagName('p');
      console.log(allPs);
  
      allPs[0].style.backgroundColor = '';
      allPs[1].style.backgroundColor = '';
      allPs[2].style.backgroundColor = '';
}