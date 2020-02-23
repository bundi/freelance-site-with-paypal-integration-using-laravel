@extends('base')

@section('main')
    <div class="container" >
        <br />
        <br />
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col"><b>Question title</b></th>
                                <th scope="col"><b>Pages</b></th>
                                <th scope="col"><b>Category</b></th>
                                <th scope="col"><b>Level</b></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>{{$questions->title}}</td>
                                <td>{{$questions->pages}}</td>
                                <td>{{$questions->subject}}</td>
                                <td>{{$questions->level}}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="row justify-content-end">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Price:${{$questions->price}}</h4>
                    </div>
                    <div class="card-body justify-content-end" style="align-content: center;">
                        <div id="paypal-button"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
        paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
                sandbox: 'demo_sandbox_client_id',
                production: 'demo_production_client_id'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'small',
                color: 'gold',
                shape: 'pill',
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function(data, actions) {
                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: '0.01',
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function(data, actions) {
                return actions.payment.execute().then(function() {
                    // Show a confirmation message to the buyer
                    window.alert('Thank you for your purchase!');
                });
            }
        }, '#paypal-button');

    </script>
@endsection
