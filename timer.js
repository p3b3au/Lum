function timer() {
      window.onload = storeTime};


    function storeTime(){
        let T0 = Date.now();
        localStorage.setItem('Ttime', T0);
            console.log('Temps stocké')
           
    };


function showTime(){
        if(localStorage.getItem('Ttime')) { 
            T0 = localStorage.getItem('Ttime')
            let now = Date.now();
            let TT = (now-T0)/60000;
            let TTT = numberWithSpace(TT.toFixed())
            time1.textContent = `Tu as commencé il y a : ${TTT} minutes`;
    }else{
        time1.textContent = 'on a perdu ton temps ...';
    }
}