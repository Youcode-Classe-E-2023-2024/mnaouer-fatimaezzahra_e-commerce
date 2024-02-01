<x-layout>

    <h1>Product Form</h1>

    <form action="{{route('product.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" value="" type="text" class="form-control" id="name" placeholder="name">
        </div>
        <div class="input-group">
            <span class="input-group-text">Description</span>
            <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quantity</label>
            <input name="quantity" value="" type="number" class="form-control" id="exampleFormControlInput1" placeholder="quantity">
        </div>

        <button type="submit" class="btn btn-primary btn-block my-4">Send</button>
        <input type="hidden" id="postId" name="post_id" value=""/>
    </form>

</x-layout>
