function loadCommentForm(document_srl)
{
    var loadComment = true,
        commentForm = jQuery('form.wikiEditor');

    if (commentForm.length)
    {
        loadComment = confirm('Would you like to cancel editing your comment?');
    }

    if (loadComment)
    {
        if (commentForm.length)
        {
            commentForm.siblings().show();
            commentForm.remove();
        }

        var params = new Array();
        params['document_srl'] = document_srl;

        exec_xml('textyle','dispCommentEditor', params, showCommentEditor, new Array('error', 'message', 'html'));
    }

    return false;
}

function showCommentEditor(response, response_tags)
{
    var pos = -1, posEnd, head = jQuery("head"), labScript = '$LAB';

    while ((pos = response['html'].indexOf('<!--Meta:', pos + 1)) > -1)
    {
        posEnd = response['html'].indexOf('-->', pos);

        // Check if the resource has extension .CSS
        if (response['html'].substr(posEnd - 4, 4) == '.css')
        {
            // 10 is the length of "<!--Meta:."
            head.append('<link rel="stylesheet" type="text/css" href="' + response['html'].substring(pos + 10, posEnd) + '">');
        }
        else{
            // 10 is the length of "<!--Meta:."
            labScript += '.script("' + response['html'].substring(pos + 10, posEnd) + '").wait()';
        }
    }

    labScript += '.wait(function(){' +
        'jQuery("#editor-box").append(jQuery(response["html"]));' +
        '$LAB.runQueue();' +
        'jQuery("#loadEditorButton").hide();' +
        'scrollTo("#editor-box");' +
        '});';

    eval(labScript);
}

function doDeleteComment(comment_srl)
{
    var params = new Array();
    params['comment_srl'] = comment_srl;
    exec_xml('textyle','procTextyleCommentItemDelete', params, function()
    {
        jQuery('#comment_' + comment_srl).hide(1000).remove();
    });
}

function modifyCommentForm(comment_srl)
{
    var loadComment = true,
        commentForm = jQuery('form.wikiEditor');

    if (commentForm.length)
    {
        loadComment = confirm('Would you like to cancel editing your comment?');
    }

    if (loadComment)
    {
        if (commentForm.length)
        {
            commentForm.siblings().show();
            commentForm.remove();
        }

        var params = new Array();
        params['comment_srl'] = comment_srl;

        exec_xml('textyle','dispModifyComment', params, showModifyCommentForm, new Array('error', 'message', 'html', 'comment_srl'));
    }

    return false;
}

function showModifyCommentForm(response, response_tags)
{
    var pos = -1, posEnd, head = jQuery("head"), labScript = '$LAB';

    while ((pos = response['html'].indexOf('<!--Meta:', pos + 1)) > -1)
    {
        posEnd = response['html'].indexOf('-->', pos);

        // Check if the resource has extension .CSS
        if (response['html'].substr(posEnd - 4, 4) == '.css')
        {
            // 10 is the length of "<!--Meta:."
            head.append('<link rel="stylesheet" type="text/css" href="' + response['html'].substring(pos + 10, posEnd) + '">');
        }
        else{
            // 10 is the length of "<!--Meta:."
            labScript += '.script("' + response['html'].substring(pos + 10, posEnd) + '").wait()';
        }
    }

    labScript += '.wait(function(){' +
        'var comment = jQuery("#comment_' + response['comment_srl'] + '");' +
        'comment.children().hide();' +
        'comment.append(jQuery(response["html"]));' +
        '$LAB.runQueue();' +
        'scrollTo("#" + comment.attr("id"));' +
        '});';

    eval(labScript);
}

function scrollTo(elem)
{
    jQuery("html, body").animate({ scrollTop: jQuery(elem).offset().top}, 2000);
}

function replyCommentForm(comment_srl)
{
    var loadComment = true,
        commentForm = jQuery('form.wikiEditor');

    if (commentForm.length)
    {
        loadComment = confirm('Would you like to cancel editing your comment?');
    }

    if (loadComment)
    {
        if (commentForm.length)
        {
            commentForm.siblings().show();
            commentForm.remove();
        }

        var params = new Array();
        params['comment_srl'] = comment_srl;

        exec_xml('textyle','dispReplyComment', params, showReplyCommentEditor, new Array('error', 'message', 'html', 'parent_srl'));
    }

    return false;
}

function showReplyCommentEditor(response, response_tags)
{
    var pos = -1, posEnd, head = jQuery("head"), labScript = '$LAB';

    while ((pos = response['html'].indexOf('<!--Meta:', pos + 1)) > -1)
    {
        posEnd = response['html'].indexOf('-->', pos);

        // Check if the resource has extension .CSS
        if (response['html'].substr(posEnd - 4, 4) == '.css')
        {
            // 10 is the length of "<!--Meta:."
            head.append('<link rel="stylesheet" type="text/css" href="' + response['html'].substring(pos + 10, posEnd) + '">');
        }
        else{
            // 10 is the length of "<!--Meta:."
            labScript += '.script("' + response['html'].substring(pos + 10, posEnd) + '").wait()';
        }
    }

    labScript += '.wait(function(){' +
        'var comment = jQuery("#comment_' + response['parent_srl'] + '");' +
        'comment.append(jQuery(response["html"]));' +
        '$LAB.runQueue();' +
        'scrollTo("#" + comment.attr("id"));' +
        '});';

    eval(labScript);
}

function hideCommentForm()
{
    var commentForm = jQuery('form.wikiEditor');

    if (commentForm.length)
    {
        commentForm.siblings().show();
        commentForm.remove();
    }
}

function afterInsertComment(ret_obj)
{
    var form = jQuery('form.wikiEditor'),
        comment = form.siblings('.itemContent'),
        comment_id = 'comment_' + ret_obj['comment_srl'];

    if (comment.parent().attr('id') == comment_id)
    {
        comment.children('.xe_content').empty().append(form.children('[name="content"]').val());

        form.remove();
        comment.show().siblings().show();
    }
    else{
        var pos = location.href.indexOf('c=');
        location = (pos < 0 ? location + (location.href.indexOf('?') < 0 ? '?' : '&') : location.href.substring(0, pos)) + 'c=' + Math.floor(Math.random()*11) + '#' + comment_id ;
    }
}