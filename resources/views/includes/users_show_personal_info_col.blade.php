<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#maindata" role="tab">Персональные данные</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="maindata" role="tabpanel">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input name="title" value="{{$user->name}}"
                                   id="title"
                                   type="text"
                                   class="form-control"
                                   minlength="3"
                                   disabled>
                        </div>
                        <div class="form-group">
                            <label for="phone"> Phone </label>
                            <input value="{{$user->phone}}"
                                   type="text"
                                   class="form-control"
                                   disabled
                            >
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Birthdate</label>
                            <input value="{{$user->birthdate}}"
                                   type="date"
                                   class="form-control"
                                   disabled
                            >
                        </div>
                        @if($user->email)
                            <div class="form-group">
                            <lable for="description">Email</lable>
                            <input value="{{$user->email}}"
                                   type="text"
                                   class="form-control"
                                   disabled
                            >
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

