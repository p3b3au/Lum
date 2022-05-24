  // <!-- LOG EVENEMENTS -->
 function logEvent() {
    // Distance //
    if (D > 10) {showLog(`10 m parcourus`)}
    if (D > 20) {showLog(`<strong>20 m parcourus</strong>`)}

    // Vitesse //
    if (V > 10) {showLog(`10 m/s`)}
    
    if (V > 3e8){showLog(`Bravo tu as atteint la vitesse de la lumière !!!!!!! <br> en ${TTT} minutes`)}

    // Acceleration //
    if (A > 0) {
        showLog (`1 G dans ta mouille`)}
    
    // Monney //
    if (M > 20) {
        showLog(`20$`)
    }
 }

    function showLog(param)  {
        event1.innerHTML = param;
   }

      setTimeout(showLog, 3000); // 3 seconds.
     


