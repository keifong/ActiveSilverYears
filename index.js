/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

paypal.Buttons({
    style : {
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    //value: '0.1'//money that is deducted
                    value: '0.1'//money that is deducted
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("http://localhost/miniProject/success.php")
        })
    },
    onCancel: function (data) {
        window.location.replace("http://localhost/miniProject/Oncancel.php")
    }
}).render('#paypal-payment-button');
