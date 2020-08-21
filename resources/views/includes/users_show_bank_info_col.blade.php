<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Создано</label>
                    <input type="text" value="{{$bankInfo->created_at}} " class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="title">Банковский счет</label>
                    <input type="text" value="{{$bankInfo->bank_account}}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="title">Кредитный счет</label>
                    <input type="text" value="{{$bankInfo->credit_account}}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label for="title">Пластиковая карта</label>
                    <input type="text" value="{{$bankInfo->card_number}}" class="form-control" disabled>
                </div>
            </div>
        </div>
    </div>
</div><br>

