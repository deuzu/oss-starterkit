<div class="form-group">
  <label for="title">Card title :</label>
  <input type="text" class="form-control" id="title" aria-describedby="titleFormat" value="<?php echo $card['title'] ?>" >
  <small id="titleFormat" class="form-text text-muted">Title format : Author - Title</small>
</div>
<div class="form-group">
  <label for="description">Card description :</label>
  <textarea class="form-control" id="description" rows="5" ><?php echo $card['description'] ?></textarea>
</div>
<button type="submit" class="btn btn-primary">Modify card</button>
<a class="btn btn-danger" href="/" role="button">Cancel</a>
</form>
