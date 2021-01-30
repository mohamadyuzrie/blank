<div class="form-group">
    <label for="code">Code</label>
    {!! Form::text('code', null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    <label for="name">Name</label>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="address">Address</label>
    {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => 4]) !!}
</div>

<div class="form-group">
    <label for="tel_no">Tel No</label>
    {!! Form::text('tel_no', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="fax_no">Fax No</label>
    {!! Form::text('fax_no', null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    <label for="email">Email</label>
    {!! Form::text('email', null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    <label for="bank">Bank</label>
    {!! Form::select('bank', [
        'RHB' => 'RHB Bank',
        'CIMB' => 'CIMB Bank',
        'AMBANK' => 'AmBank',
    ], null, [
        'class' => 'form-control select2',
        'placeholder' => '-',
    ]) !!}
</div>


<div class="form-group">
    <label for="type">Type</label>
    {!! Form::select('type', [
        'A' => 'A',
        'B' => 'B',
        'C' => 'C',
        'D' => 'D',
    ], null, [
        'class' => 'form-control',
        'placeholder' => '-',
    ]) !!}
</div>
