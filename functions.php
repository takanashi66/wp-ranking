<?php
	//アクセス数の取得
	function get_post_views( $postID ){
		$count_key = 'post_views_count';
		$count = get_post_meta( $postID, $count_key, true );
		if ( $count == '' ){
			delete_post_meta( $postID, $count_key );
			add_post_meta( $postID, $count_key, '0' );

			return "0";
		}

		return $count;
	}

	//アクセス数の保存
	function set_post_views( $postID ){
		$count_key = 'post_views_count';
		$count = get_post_meta( $postID, $count_key, true );
		if ( $count == '' ){
			$count = 0;
			delete_post_meta( $postID, $count_key );
			add_post_meta( $postID, $count_key, '0' );
		}else{
			$count ++;
			update_post_meta( $postID, $count_key, $count );
		}
	}