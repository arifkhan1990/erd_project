<hr>
<div class="row" style="margin: 0; padding: 0">
    <div class="col-md-3">
        @if(auth()->user()->personal()->count() <= 0)
            <div style="text-align: center">
                <a href="{{ route('personal-form.index') }}">Add Personal Information</a>
            </div>
        @elseif(auth()->user()->personal()->count() > 0)
            <div style="text-align: center">
                <a href="{{ route('personal-form.edit',auth()->user()->id) }}">Edit Personal Information</a>
            </div>
        @endif
    </div>

    <div class="col-md-3">
        @if(auth()->user()->educational()->count() <= 0)
            <div style="text-align: center">
                <a href="{{ route('educational-form.index') }}">Add Educational Information</a>
            </div>
        @elseif(auth()->user()->educational()->count() > 0)
            <div style="text-align: center">
                <a href="{{ route('educational-form.edit',auth()->user()->id) }}">Edit Educational Information</a>
            </div>
        @endif
    </div>

    <div class="col-md-3">
        @if(auth()->user()->travel()->count() <= 0)
            <div style="text-align: center">
                <a href="{{ route('travel-form.index') }}">Add Travel Information</a>
            </div>

        @elseif(auth()->user()->travel()->count() > 0)
            <div style="text-align: center">
                <a href="{{ route('travel-form.edit',auth()->user()->id) }}">Edit Travel Information</a>
            </div>
        @endif
    </div>

    <div class="col-md-3">
        @if(auth()->user()->banking()->count() <= 0)
            <div style="text-align: center">
                <a href="{{ route('banking-form.index') }}">Add Banking Information</a>
            </div>

        @elseif(auth()->user()->banking()->count() > 0)
            <div style="text-align: center">
                <a href="{{ route('banking-form.edit', auth()->user()->id) }}">Edit Banking Information</a>
            </div>
        @endif
    </div>

    <div class="col-md-12">
        <br>
        @if(auth()->user()->application()->count() > 0)
            <a href="{{ route('home') }}">
                <button class="btn btn-success d-block m-auto">Submission complete, return to dashboard</button>
            </a>
        @endif
    </div>
</div>
<hr>
