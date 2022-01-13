
<title>Edit Product</title>
<link href="{{ asset("css/app.css") }}" rel="stylesheet">

<div class="formContainer">
    <div class="card">
        <form style="display: flex;flex-direction: column;width:100%;justify-content:center" action="{{ "/update/" . $product->id }}" method="post">
        @csrf
        @method('put')
            <p class="select text boldtext largeText">{{ $product->producttype ? "BOOK" : "CD" }}</p>
            <input class="input" type="text" name="title" id="title" placeholder="Title" value="{{ $product->title }}" required />
            <input class="input" type="text" name="fname" id="fname" placeholder="First Name (optional)" value="{{ $product->fname }}" />
            <input class="input" type="text" name="sname" id="sname" placeholder="Surname / Band" value="{{ $product->sname }}" required/>
            <input class="input" type="text" name="price" id="price" placeholder="Price" value="{{ $product->price }}" required/>
            <input class="input" type="number" name="pages" id="pages" placeholder="Num pages / Play length" value="{{ $product->pages }}" required/>
            <button class="btn" type="submit">Submit</button>
        </form>
        <form style="display: flex;flex-direction: column;width:100%;justify-content:center" action="{{ "/delete/" . $product->id }}" method="post">
            @csrf
            @method('DELETE')
                <button class="btn danger" type="submit">Delete</button>
        </form>
    </div>
</div>