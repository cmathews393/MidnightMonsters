<?php
	require __DIR__ . '/SourceQuery/bootstrap.php';
	
	use xPaw\SourceQuery\SourceQuery;
	//LOOP1 - KF2
	// Edit this ->
	define( 'KFADDR', 'public.midnightmonsters.net' );
	define( 'KFPORT', 27015 );
	define( 'KFTIMEOUT',     1 );
	define( 'KFENGINE',      SourceQuery::SOURCE );
	// Edit this <-

	$KFQuery = new SourceQuery( );

	$KFInfo    = [];
	$KFRules   = [];
	$KFPlayers = [];
	$KFException = null;

	try
	{
		$KFQuery->Connect( KFADDR, KFPORT, KFTIMEOUT, KFENGINE );
		//$Query->SetUseOldGetChallengeMethod( true ); // Use this when players/rules retrieval fails on games like Starbound
		
		$KFInfo    = $KFQuery->GetInfo( );
		$KFPlayers = $KFQuery->GetPlayers( );
		$KFRules   = $KFQuery->GetRules( );
	}
	catch( Exception $KFe )
	{
		$KFException = $KFe;
	}
	finally
	{
		$KFQuery->Disconnect( );
	}

	// Edit this ->
	define( 'PZADDR', 'public.midnightmonsters.net' );
	define( 'PZPORT', 16000 );
	define( 'PZTIMEOUT',     1 );
	define( 'PZENGINE',      SourceQuery::SOURCE );
	// Edit this <-
	//LOOP2 - PZServer
	$PZQuery = new SourceQuery( );

	$PZInfo    = [];
	$PZRules   = [];
	$PZPlayers = [];
	$PZException = null;

	try
	{
		$PZQuery->Connect( PZADDR, PZPORT, PZTIMEOUT, PZENGINE );
		//$Query->SetUseOldGetChallengeMethod( true ); // Use this when players/rules retrieval fails on games like Starbound
		
		$PZInfo    = $PZQuery->GetInfo( );
		$PZPlayers = $PZQuery->GetPlayers( );
		$PZRules   = $PZQuery->GetRules( );
	}
	catch( Exception $PZe )
	{
		$PZException = $PZe;
	}
	finally
	{
		$PZQuery->Disconnect( );
	}
	//LOOP3 - CSGO1			
	define( 'CSGO1ADDR', 'public.midnightmonsters.net' );
	define( 'CSGO1PORT', 16006 );
	define( 'CSGO1TIMEOUT',     1 );
	define( 'CSGO1ENGINE',      SourceQuery::SOURCE );
	// Edit this <-

	$CSGO1Query = new SourceQuery( );

	$CSGO1Info    = [];
	$CSGO1Rules   = [];
	$CSGO1Players = [];
	$CSGO1Exception = null;

	try
	{
		$CSGO1Query->Connect( CSGO1ADDR, CSGO1PORT, CSGO1TIMEOUT, CSGO1ENGINE );
		//$Query->SetUseOldGetChallengeMethod( true ); // Use this when players/rules retrieval fails on games like Starbound
		
		$CSGO1Info    = $CSGO1Query->GetInfo( );
		$CSGO1Players = $CSGO1Query->GetPlayers( );
		$CSGO1Rules   = $CSGO1Query->GetRules( );
	}
	catch( Exception $CSGO1e )
	{
		$CSGO1Exception = $CSGO1e;
	}
	finally
	{
		$CSGO1Query->Disconnect( );
	}


	/* define( 'CSGO2ADDR', 'public.midnightmonsters.net' );
	define( 'CSGO2PORT', 16011 );
	define( 'CSGO2TIMEOUT',     1 );
	define( 'CSGO2ENGINE',      SourceQuery::SOURCE );
	// Edit this <-

	$CSGO2Query = new SourceQuery( );

	$CSGO2Info    = [];
	$CSGO2Rules   = [];
	$CSGO2Players = [];
	$CSGO2Exception = null;

	try
	{
		$CSGO2Query->Connect( CSGO2ADDR, CSGO2PORT, CSGO2TIMEOUT, CSGO2ENGINE );
		//$Query->SetUseOldGetChallengeMethod( true ); // Use this when players/rules retrieval fails on games like Starbound
		
		$CSGO2Info    = $CSGO2Query->GetInfo( );
		$CSGO2Players = $CSGO2Query->GetPlayers( );
		$CSGO2Rules   = $CSGO2Query->GetRules( );
	}
	catch( Exception $CSGO2e )
	{
		$CSGO2Exception = $CSGO2e;
	}
	finally
	{
		$CSGO2Query->Disconnect( );
	}

	*/
	define( 'ARK1ADDR', 'public.midnightmonsters.net' );
	define( 'ARK1PORT', 16016 );
	define( 'ARK1TIMEOUT',     1 );
	define( 'ARK1ENGINE',      SourceQuery::SOURCE );
	// Edit this <-

	$ARK1Query = new SourceQuery( );

	$ARK1Info    = [];
	$ARK1Rules   = [];
	$ARK1Players = [];
	$ARK1Exception = null;

	try
	{
		$ARK1Query->Connect( ARK1ADDR, ARK1PORT, ARK1TIMEOUT, ARK1ENGINE );
		//$Query->SetUseOldGetChallengeMethod( true ); // Use this when players/rules retrieval fails on games like Starbound
		
		$ARK1Info    = $ARK1Query->GetInfo( );
		$ARK1Players = $ARK1Query->GetPlayers( );
		$ARK1Rules   = $ARK1Query->GetRules( );
	}
	catch( Exception $ARK1e )
	{
		$ARK1Exception = $ARK1e;
	}
	finally
	{
		$ARK1Query->Disconnect( );
	}


	define( 'ARK2ADDR', 'public.midnightmonsters.net' );
	define( 'ARK2PORT', 16027 );
	define( 'ARK2TIMEOUT',     1 );
	define( 'ARK2ENGINE',      SourceQuery::SOURCE );
	// Edit this <-

	$ARK2Query = new SourceQuery( );

	$ARK2Info    = [];
	$ARK2Rules   = [];
	$ARK2Players = [];
	$ARK2Exception = null;

	try
	{
		$ARK2Query->Connect( ARK2ADDR, ARK2PORT, ARK2TIMEOUT, ARK2ENGINE );
		//$Query->SetUseOldGetChallengeMethod( true ); // Use this when players/rules retrieval fails on games like Starbound
		
		$ARK2Info    = $ARK2Query->GetInfo( );
		$ARK2Players = $ARK2Query->GetPlayers( );
		$ARK2Rules   = $ARK2Query->GetRules( );
	}
	catch( Exception $ARK2e )
	{
		$ARK2Exception = $ARK2e;
	}
	finally
	{
		$ARK2Query->Disconnect( );
	}

	define( 'ARK3ADDR', 'public.midnightmonsters.net' );
	define( 'ARK3PORT', 16038 );
	define( 'ARK3TIMEOUT',     1 );
	define( 'ARK3ENGINE',      SourceQuery::SOURCE );
	// Edit this <-

	$ARK3Query = new SourceQuery( );

	$ARK3Info    = [];
	$ARK3Rules   = [];
	$ARK3Players = [];
	$ARK3Exception = null;

	try
	{
		$ARK3Query->Connect( ARK3ADDR, ARK3PORT, ARK3TIMEOUT, ARK3ENGINE );
		//$Query->SetUseOldGetChallengeMethod( true ); // Use this when players/rules retrieval fails on games like Starbound
		
		$ARK3Info    = $ARK3Query->GetInfo( );
		$ARK3Players = $ARK3Query->GetPlayers( );
		$ARK3Rules   = $ARK3Query->GetRules( );
	}
	catch( Exception $ARK3e )
	{
		$ARK3Exception = $ARK3e;
	}
	finally
	{
		$ARK3Query->Disconnect( );
	}

	define( 'ARK4ADDR', 'public.midnightmonsters.net' );
	define( 'ARK4PORT', 16045 );
	define( 'ARK4TIMEOUT',     1 );
	define( 'ARK4ENGINE',      SourceQuery::SOURCE );
	// Edit this <-

	$ARK4Query = new SourceQuery( );

	$ARK4Info    = [];
	$ARK4Rules   = [];
	$ARK4Players = [];
	$ARK4Exception = null;

	try
	{
		$ARK4Query->Connect( ARK4ADDR, ARK4PORT, ARK4TIMEOUT, ARK4ENGINE );
		//$Query->SetUseOldGetChallengeMethod( true ); // Use this when players/rules retrieval fails on games like Starbound
		
		$ARK4Info    = $ARK4Query->GetInfo( );
		$ARK4Players = $ARK4Query->GetPlayers( );
		$ARK4Rules   = $ARK4Query->GetRules( );
	}
	catch( Exception $ARK4e )
	{
		$ARK4Exception = $ARK4e;
	}
	finally
	{
		$ARK4Query->Disconnect( );
	}

	define( 'INS1ADDR', 'public.midnightmonsters.net' );
	define( 'INS1PORT', 16035 );
	define( 'INS1TIMEOUT',     1 );
	define( 'INS1ENGINE',      SourceQuery::SOURCE );
	// Edit this <-

	$INS1Query = new SourceQuery( );

	$INS1Info    = [];
	$INS1Rules   = [];
	$INS1Players = [];
	$INS1Exception = null;

	try
	{
		$INS1Query->Connect( INS1ADDR, INS1PORT, INS1TIMEOUT, INS1ENGINE );
		//$Query->SetUseOldGetChallengeMethod( true ); // Use this when players/rules retrieval fails on games like Starbound
		
		$INS1Info    = $INS1Query->GetInfo( );
		$INS1Players = $INS1Query->GetPlayers( );
		$INS1Rules   = $INS1Query->GetRules( );
	}
	catch( Exception $INS1e )
	{
		$INS1Exception = $INS1e;
	}
	finally
	{
		$INS1Query->Disconnect( );
	}

	?>