
    function loadFunction() {
        // body...
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
    
        if(dd<10){
            dd='0'+dd;
        } 
        if(mm<10){
            mm='0'+mm;
        } 
    
        today = yyyy+'-'+mm+'-'+dd;                
        document.getElementById("date").defaultValue =today+"";
    }

    function setInputDate(_id){
        var _dat = document.querySelector(_id);
        var hoy = new Date(),
            d = hoy.getDate(),
            m = hoy.getMonth()+1, 
            y = hoy.getFullYear(),
            data;
    
        if(d < 10){
            d = "0"+d;
        };
        if(m < 10){
            m = "0"+m;
        };
    
        data = y+"-"+m+"-"+d;
        console.log(data);
        _dat.value = data;
    };
    
    setInputDate("#date");