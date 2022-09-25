# momov1
description: facilitate momo payment collection

Hello Mr. Joshua this repository contains the main 2 files you shall be working with the payment form template already created.
The payment-form.php contains the payload required to process the transaction (price, account number ...)
You can modify the payment-form.php file as needed to process the transaction in accordance with momo documentation.
While the process-payment.php form should be used in making the api request to mtn-momo and returning the appropriate responses as needed in accordance with momo documentation.

Resources required:
api documentation:
password:
usernam:

workflow description : collect required data in payment form -> receive and process data/payload in processpayment form -> make api request to receive payment (using momo collection services) -> close and return  transaction status response to user.
