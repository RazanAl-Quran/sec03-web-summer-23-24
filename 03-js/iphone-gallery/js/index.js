// document.addEventListener('DOMContentLoaded',function() {

// })


function displayBluePurple() {
    let bluePrupleRadio = document.querySelectorAll("input[name='color']");
    console.log('bluePrupleRadio',bluePrupleRadio);

     
    if(bluePrupleRadio[0].checked) {
        document.querySelector('#purple-div').style.display = 'none';
        document.querySelector('#blue-div').style.display = 'block';

        let allBlueImgs = document.querySelectorAll('#blue-div img');
        console.log('allBlueImgs',allBlueImgs);

        allBlueImgs.forEach(function(item) {
            item.addEventListener('mouseover',function(){
                document.querySelector('#bigimg1').src = item.src;
            })
        })
        


    } else if(bluePrupleRadio[1].checked) {
        document.querySelector('#blue-div').style.display = 'none';
        document.querySelector('#purple-div').style.display = 'block';

        // do it plz
    } 
    
}