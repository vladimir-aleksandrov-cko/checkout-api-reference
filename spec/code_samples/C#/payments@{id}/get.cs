var api = CheckoutApi.Create("your secret key");
var threeDsSessionId = "sid_y3oqhf46pyzuxjbcn2giaqnb44";
GetPaymentResponse payment = await api.Payments.GetAsync(threeDsSessionId);

if (payment.Approved)
{            
    var cardSourceId = payment.Source.AsCard().Id;
}