<?php
session_start();
if (!isset($_SESSION["session_user"]))
{
    header("location: error.php");
}
include "app/header.php";
include "app/nav.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <a href="booked.php" class="btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go Back - Home Page</a><br><br>
                <div class="panel panel-default">
                    <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> view added rentals here</div>
                    <div class="panel-body">
                        <div id="msg" style="display: none;" class="alert alert-success">
                            <span class="glyphicon glyphicon-check"></span>
                            <!--message from firebase will appear here...-->
                        </div>
                        <script>


                            var html =
                                '<div class="post post-mdl-cell mdl-cell--12-col ' +
                                'mdl-cell--6-col-tablet mdl-cell--4-col-desktop mdl-grid mdl-grid--no-spacing">' +
                                '<div class="mdl-card mdl-shadow--2dp">' +
                                '<div class="mdl-card__title mdl-color--light-blue-600 mdl-color-text--white">' +
                                '<h4 class="mdl-card__title-text"></h4>' +
                                '</div>' +
                                '<div class="header">' +
                                '<div>' +
                                '<div class="avatar"></div>' +
                                '<div class="name mdl-color-text--black"></div>' +
                                '</div>' +
                                '</div>' +
                                '<span class="star">' +
                                '<div class="not-starred material-icons">star_border</div>' +
                                '<div class="starred material-icons">star</div>' +
                                '<div class="star-count">0</div>' +
                                '</span>' +
                                '<div class="text"></div>' +
                                '<div class="comments-container"></div>' +
                                '<form class="add-comment" action="#">' +
                                '<div class="mdl-textfield mdl-js-textfield">' +
                                '<input class="mdl-textfield__input new-comment" type="text">' +
                                '<label class="mdl-textfield__label">Comment...</label>' +
                                '</div>' +
                                '</form>' +
                                '</div>' +
                                '</div>';

                            // Create the DOM element from the HTML.
                            var div = document.createElement('div');
                            div.innerHTML = html;
                            var postElement = div.firstChild;


                            /**
                             * Creates a comment element and adds it to the given postElement.
                             */

                            var commentsRef = firebase.database().ref('posts/');
                            function viewPostedRentals(postElement, key, name, location, price) {
                                var comment = document.createElement('div');
                                comment.classList.add('comment-' + key);
                                comment.innerHTML = '<span class="name"></span><span class="location"></span><span class="price"></span>';
                                comment.getElementsByClassName('name')[0].innerText = name;
                                comment.getElementsByClassName('price')[0].innerText = price;
                                comment.getElementsByClassName('location')[0].innerText = location || 'Anonymous';

                                var commentsContainer = postElement.getElementsByClassName('comments-container')[0];
                                commentsContainer.appendChild(comment);
                            }
                            commentsRef.on('child_added', function(data) {
                                viewPostedRentals(postElement, data.key, data.val().name, data.val().location, data.val().price);

                            });

                            commentsRef.on('child_changed', function(data) {
                                setCommentValues(postElement, data.key, data.val().text, data.val().author);
                            });

                            commentsRef.on('child_removed', function(data) {
                                deleteComment(postElement, data.key);
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
<?php
include "app/footer.php";
