<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/post')) {
                if (0 === strpos($pathinfo, '/post/edit')) {
                    // get_post_for_edit
                    if ('/post/edit/get' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\AjaxController::getPostAction',  '_route' => 'get_post_for_edit',);
                    }

                    // edit_post
                    if (preg_match('#^/post/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_post')), array (  '_controller' => 'AppBundle\\Controller\\PostController::editPostAction',));
                    }

                }

                // add_like
                if ('/post/add/like' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ArticleLController::likeAction',  '_route' => 'add_like',);
                }

                // create_post
                if ('/post/create' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PostController::createAction',  '_route' => 'create_post',);
                }

                // show_post
                if (0 === strpos($pathinfo, '/post/view') && preg_match('#^/post/view/(?P<id>[^/]++)(?:/(?P<title>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_post')), array (  'title' => '',  '_controller' => 'AppBundle\\Controller\\PostController::showPostAction',));
                }

                // delete_post
                if (0 === strpos($pathinfo, '/post/delete') && preg_match('#^/post/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_post')), array (  '_controller' => 'AppBundle\\Controller\\PostController::deletePostAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/photo')) {
                // upload_photo
                if ('/photo/upload' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PhotoController::uploadAction',  '_route' => 'upload_photo',);
                }

                // delete_photo
                if (0 === strpos($pathinfo, '/photo/delete') && preg_match('#^/photo/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_photo')), array (  '_controller' => 'AppBundle\\Controller\\PhotoController::deleteAction',));
                }

                // edit_photo
                if (0 === strpos($pathinfo, '/photo/edit') && preg_match('#^/photo/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_photo')), array (  '_controller' => 'AppBundle\\Controller\\PhotoController::editAction',));
                }

            }

            // make_profile_picture
            if ('/profile/make' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PhotoController::pictureChangeAction',  '_route' => 'make_profile_picture',);
            }

        }

        // get_matches
        if ('/get_matches' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\AjaxController::getMatchesAction',  '_route' => 'get_matches',);
        }

        if (0 === strpos($pathinfo, '/comment')) {
            // create_comment
            if ('/comment/create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CommentController::createAction',  '_route' => 'create_comment',);
            }

            // show_comment
            if (0 === strpos($pathinfo, '/comment/view') && preg_match('#^/comment/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_comment')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::showCommentAction',));
            }

            // delete_comment
            if (0 === strpos($pathinfo, '/comment/delete') && preg_match('#^/comment/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_comment')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::deleteCommentAction',));
            }

            // list_comments
            if (0 === strpos($pathinfo, '/comment/list') && preg_match('#^/comment/list/(?P<postId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_comments')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::listCommentAction',));
            }

            // edit_comment
            if ('/comment/edit' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CommentController::editCommentAction',  '_route' => 'edit_comment',);
            }

            // create_comment_reply
            if ('/comment/reply/create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CommentRController::replyAction',  '_route' => 'create_comment_reply',);
            }

        }

        elseif (0 === strpos($pathinfo, '/reply')) {
            // delete_reply
            if ('/reply/delete' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CommentRController::deleteReplyAction',  '_route' => 'delete_reply',);
            }

            // list_replies
            if (0 === strpos($pathinfo, '/reply/list') && preg_match('#^/reply/list/(?P<commentId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_replies')), array (  '_controller' => 'AppBundle\\Controller\\CommentRController::listReplyAction',));
            }

            // edit_reply
            if ('/reply/edit' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CommentRController::editReplyAction',  '_route' => 'edit_reply',);
            }

        }

        // user_registration
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
        }

        // homepage
        if (0 === strpos($pathinfo, '/home') && preg_match('#^/home(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',));
        }

        // test_page
        if ('/test' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::testAction',  '_route' => 'test_page',);
        }

        // send_notification
        if ('/send-notification' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::sendNotification',  '_route' => 'send_notification',);
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        // user_profile
        if (0 === strpos($pathinfo, '/user/profile') && preg_match('#^/user/profile/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_profile')), array (  '_controller' => 'AppBundle\\Controller\\UserController::profileAction',));
        }

        if (0 === strpos($pathinfo, '/notifications')) {
            // mgilet_notification_notification_list
            if (0 === strpos($pathinfo, '/notifications/blog') && preg_match('#^/notifications/blog(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_mgilet_notification_notification_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mgilet_notification_notification_list')), array (  'page' => 1,  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listAction',));
            }
            not_mgilet_notification_notification_list:

            // notifications_list
            if (0 === strpos($pathinfo, '/notifications/show') && preg_match('#^/notifications/show(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_notifications_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notifications_list')), array (  'page' => 1,  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listAction',));
            }
            not_notifications_list:

            // notification_mark_as_seen
            if (preg_match('#^/notifications/(?P<notification>[^/]++)/mark_as_seen$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_notification_mark_as_seen;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_mark_as_seen')), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsSeenAction',));
            }
            not_notification_mark_as_seen:

            // notification_mark_as_seen_ajax
            if ('/notifications/mark_as_seen' === $pathinfo) {
                return array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsSeenAjaxAction',  '_route' => 'notification_mark_as_seen_ajax',);
            }

            // notification_mark_as_unseen
            if (preg_match('#^/notifications/(?P<notification>[^/]++)/mark_as_unseen$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_notification_mark_as_unseen;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_mark_as_unseen')), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsUnSeenAction',));
            }
            not_notification_mark_as_unseen:

            // notification_mark_all_as_seen
            if ('/notifications/markAllAsSeen' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_notification_mark_all_as_seen;
                }

                return array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAllAsSeenAction',  '_route' => 'notification_mark_all_as_seen',);
            }
            not_notification_mark_all_as_seen:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
