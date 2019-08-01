<?php

/**
* @OA\Get(
*      path="/v1/groups",
*      operationId="groups",
*      tags={"Group v1"},
*      summary="Get all groups",
*      description="Returns a collection of group objects",
*      security={
*           {"passport": {"*"}},
*      },
*      @OA\Response(
*          response=200,
*          description="successful operation",
*          @OA\Schema(ref="#/components/schemas/Groups"),
*       ),
*       @OA\Response(response=400, description="Bad request"),
* )
*
*/

/**
* @OA\POST(
*      path="/v1/groups",
*      operationId="groups",
*      tags={"Group v1"},
*      summary="Create new group",
*      description="Returns a the new group object",
*      security={
*           {"passport": {"*"}},
*      },
*      @OA\RequestBody(
*       required=true,
*       @OA\MediaType(
*           mediaType="application/x-www-form-urlencoded",
*           @OA\Schema(
*               type="object",
*               required={"title", "grade_id", "period_id", "organization_id", "owner_id"},
*               @OA\Property(
*                   property="title",
*                   description="Group title",
*                   type="string"
*               ),
*               @OA\Property(
*                   property="grade_id",
*                   description="Grade Id",
*                   type="integer"
*               ),
*               @OA\Property(
*                   property="period_id",
*                   description="Periode Id",
*                   type="integer",
*               ),
*               @OA\Property(
*                   property="organization_id",
*                   description="Organization Id",
*                   type="integer"
*               ),
*               @OA\Property(
*                   property="owner_id",
*                   description="Owner (User) Id",
*                   type="integer",
*               ),
*           )
*       )
*   ),
*      
*      @OA\Response(
*          response=200,
*          description="successful operation",
*          @OA\JsonContent(ref="#/components/schemas/Group"),
*       ),
*       @OA\Response(response=400, description="Bad request"),
*       security={
*           {"api_key_security_example": {}}
*       }
*      
* )
*/


/**
* @OA\PUT(
*      path="/v1/groups/{id}",
*      operationId="groups",
*      tags={"Group v1"},
*      summary="Edit group",
*      description="Edit group",
*      security={
*           {"passport": {"*"}},
*      },
*      @OA\Parameter(
*          name="id",
*          description="Group id",
*          required=true,
*          in="path",
*          @OA\Schema(
*              type="integer"
*          )
*      ),
*      @OA\RequestBody(
*       required=true,
*       @OA\MediaType(
*           mediaType="application/x-www-form-urlencoded",
*           @OA\Schema(
*               type="object",
*               @OA\Property(
*                   property="title",
*                   description="Group title",
*                   type="string"
*               ),
*               @OA\Property(
*                   property="grade_id",
*                   description="Grade Id",
*                   type="integer"
*               ),
*               @OA\Property(
*                   property="period_id",
*                   description="Periode Id",
*                   type="integer",
*               ),
*               @OA\Property(
*                   property="organization_id",
*                   description="Organization Id",
*                   type="integer"
*               ),
*               @OA\Property(
*                   property="owner_id",
*                   description="Owner (User) Id",
*                   type="integer",
*               ),
*           )
*       )
*   ),
*      
*       @OA\Response(
*          response=200,
*          description="successful operation",
*          @OA\JsonContent(ref="#/components/schemas/Group")   
*       ),
*       @OA\Response(response=400, description="Bad request"),
*       security={
*           {"api_key_security_example": {}}
*       }
*      
* )
* 
*/

/**
* @OA\Get(
*      path="/v1/groups/{id}",
*      operationId="groups",
*      tags={"Group v1"},
*      summary="Get all groups",
*      description="Returns a collection of group objects",
*      security={
*           {"passport": {"*"}},
*      },
*      @OA\Parameter(
*          name="id",
*          description="Group id",
*          required=true,
*          in="path",
*          @OA\Schema(
*              type="integer"
*          )
*      ),
*      @OA\Response(
*          response=200,
*          description="successful operation",
*          @OA\JsonContent(ref="#/components/schemas/Group"),
*       ),
*       @OA\Response(response=400, description="Bad request"),
* )
*
*/

/**
* @OA\DELETE(
*      path="/v1/groups/{id}",
*      operationId="groups",
*      tags={"Group v1"},
*      summary="Delete group by Id",
*      description="Delete a group object",
*      security={
*           {"passport": {"*"}},
*      },
*      @OA\Parameter(
*          name="id",
*          description="Group id",
*          required=true,
*          in="path",
*          @OA\Schema(
*              type="integer"
*          )
*      ),
*      
*      @OA\Response(
*          response=200,
*          description="successful operation",   
*       ),
*       @OA\Response(response=400, description="Bad request"),
*      
* )
* 
*/

/**
* @OA\PUT(
*      path="/v1/groups/enrol",
*      operationId="groups",
*      tags={"Group v1"},
*      summary="Create group enrolment",
*      description="Create group enrolment",
*      security={
*           {"passport": {"*"}},
*      },
*      @OA\RequestBody(
*       required=true,
*       @OA\MediaType(
*           mediaType="application/x-www-form-urlencoded",
*           @OA\Schema(
*               type="object",
*               @OA\Property(
*                   property="user_id",
*                   description="User Id",
*                   type="integer"
*               ),
*               @OA\Property(
*                   property="group_id",
*                   description="Group Id",
*                   type="integer"
*               ),
*           )
*       )
*   ),
*      
*       @OA\Response(
*          response=200,
*          description="successful operation",
*          @OA\JsonContent(ref="#/components/schemas/Group")   
*       ),
*       @OA\Response(response=400, description="Bad request"),
*       security={
*           {"api_key_security_example": {}}
*       }
*      
* )
* 
*/