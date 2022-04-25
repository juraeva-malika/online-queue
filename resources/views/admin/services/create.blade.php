@extends("admin.admin-layout")
@section("content")
    <form  method="POST">
         @csrf
        <div class="form-group">
            <label for="example">Name</label>
            <input type="text" name="name" class="form-control" id="example" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Time taken (15 mins by #)</label>
            <select name="time" class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@stop