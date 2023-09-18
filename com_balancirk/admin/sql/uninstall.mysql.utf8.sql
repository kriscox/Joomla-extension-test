/**************************************************************************************************
*                                                                                                 * 
*  SQL script to remove table TEACHERS                                                            * 
*                                                                                                 * 
**************************************************************************************************/
DROP TABLE IF EXISTS `#__balancirk_teachers`;

/**************************************************************************************************
*                                                                                                 * 
*  SQL script to remove table PRESENCES                                                           * 
*                                                                                                 * 
**************************************************************************************************/
DROP VIEW IF EXISTS `#__balancirk_presences_view`;
DROP TABLE IF EXISTS `#__balancirk_presences`;

/**************************************************************************************************
*                                                                                                 * 
*  SQL script to remove table SUBSCRIPTIONS                                                       * 
*                                                                                                 * 
**************************************************************************************************/
DROP VIEW IF EXISTS `#__balancirk_subscriptions_view`;
DROP TABLE IF EXISTS `#__balancirk_subscriptions`;

/**************************************************************************************************
*                                                                                                 * 
*  SQL script to remove table LESSONS                                                             * 
*                                                                                                 * 
**************************************************************************************************/
DROP VIEW IF EXISTS `#__balancirk_lessons_complete`;
DROP TABLE IF EXISTS `#__balancirk_lessons`;

/**************************************************************************************************
*                                                                                                 * 
*  SQL script to remove table TYPES                                                               * 
*                                                                                                 * 
**************************************************************************************************/
DROP TABLE IF EXISTS `#__balancirk_types`;

/**************************************************************************************************
*                                                                                                 * 
*  SQL script to remove table PARENT                                                            * 
*                                                                                                 * 
**************************************************************************************************/
DROP TABLE IF EXISTS `#__balancirk_parents`;

/**************************************************************************************************
*                                                                                                 * 
*  SQL script to remove table MEMBERS                                                             * 
*                                                                                                 * 
**************************************************************************************************/
DROP VIEW IF EXISTS `#__balancirk_members`;
DROP TABLE IF EXISTS `#__balancirk_members_additional`;

/**************************************************************************************************
*                                                                                                 * 
*  SQL script to remove table STUDENTS                                                            * 
*                                                                                                 * 
**************************************************************************************************/
DROP TABLE IF EXISTS `#__balancirk_students`;
