<form id="creationCard" method="POST" action="/?route=cardCreation">
  <div class="form-group">
    <label for="title">Card title :</label>
    <input type="text" name="title" class="form-control" id="title" aria-describedby="titleFormat" placeholder="Enter a title">
    <small id="titleFormat" class="form-text text-muted">Title format : Author - Title</small>
  </div>
  <div class="form-group">
    <label for="description">Card description :</label>
    <textarea name="description" class="form-control" id="description" placeholder="Enter the description" rows="5"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Create a card</button>
  <a class="btn btn-danger" href="/" role="button">Cancel</a>
</form>
