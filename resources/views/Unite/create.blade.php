@extends('master')
@section('title', 'Unités')
@section('content')
    <form class="form-horizontal">
        <fieldset>
            <legend>Insérer une nouvelle unité</legend>
            <div class="form-group">
                <label for="codeunite" class="col-lg-2 control-label">Code unité</label>
                <div class="col-lg-2">
                    <input type="text" class="form-control" id="codeunite" placeholder="votre code unité">
                </div>
            </div>
            <div class="form-group">
                <label for="Raisonsociale" class="col-lg-2 control-label">Raison sociale</label>
                <div class="col-lg-8">
                <input type="text" class="form-control" id="raisonsociale" placeholder="La raison sociale">
                    <label><input type="checkbox" value="">Active</label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>

@endsection