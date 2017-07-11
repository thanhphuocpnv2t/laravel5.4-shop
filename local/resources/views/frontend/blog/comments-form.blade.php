<div class="comments-form-wrapper clearfix">
    <h3>Leave A reply</h3>
    <form class="comment-form" method="post" id="postComment" action="#">
        <div class="field">
            <label>Name<em class="required">*</em></label>
            <input type="text" class="input-text" title="Name" value="" id="user" name="user_name">
        </div>
        <div class="field">
            <label>Email<em class="required">*</em></label>
            <input type="text" class="input-text validate-email" title="Email" value="" name="user_email">
        </div>
        <div class="clear"></div>
        <div class="field aw-blog-comment-area">
            <label>Comment<em class="required">*</em></label>
            <textarea rows="5" cols="50" class="input-text" title="Comment" id="comment1" name="comment"></textarea>
        </div>
        <div style="width:96%" class="button-set">
            <input type="hidden" value="1" name="blog_id">
            <button type="submit" class="bnt-comment"><span><span>Add Comment</span></span></button>
        </div>
    </form>
</div>