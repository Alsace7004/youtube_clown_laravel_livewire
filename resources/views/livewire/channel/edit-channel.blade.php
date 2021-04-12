<div>
    {{-- Do your work, then step back. --}}

    
    <form wire:submit.prevent="update">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text"  class="form-control" placeholder="name...">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text"  class="form-control" placeholder="slug...">
        </div>
        <div class="form-group">
            <label for="name">Description</label>
            <textarea  class="form-control" cols="30" rows="5" placeholder="Description..."></textarea>
        </div>
       
        <button type="submit" class="btn btn-secondary">Submit</button>
    </form>

    
</div>
