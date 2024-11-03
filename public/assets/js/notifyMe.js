const notifyMe = (text, color = "red", duration=5000, load = false) => {  
    //load ? avatar =  "./assets/gif/spinner.gif" : avatar = false
    var toastMe =  Toastify({
        text: text,
        duration: duration,
        newWindow: true,
        //avatar: avatar,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, 
        style: {
            background: color
        },
        onClick: function(){} 
        })
        toastMe.showToast();
        return toastMe;
  }