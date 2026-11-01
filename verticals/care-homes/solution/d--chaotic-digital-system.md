## d) Facilities with a Chaotic IT System

A chaotic IT environment often combines multiple logins, spreadsheets, messaging groups, local databases, shared folders and paper forms, with no clear source of truth. A public-facing website can improve communication, but it does not resolve fragmented internal records. Stabilize and map the current environment before migrating, integrating or retiring systems.

---

## Describe the Situation

Different teams may use different tools for the same work. Records can be duplicated, incomplete or inaccessible when a staff member leaves, a device fails or a vendor changes. Staff may send files to individuals because they cannot find a shared, governed location.

| Area | Common current condition |
| Records | Copies are spread across systems, devices, accounts and paper |
| Teams | Ownership and permissions vary by tool or department |
| Technology | Unknown integrations, unsupported tools or informal accounts |
| Public website | May contain stale information or accidental personal details |
| Migration goal | Reduce risk, establish authority and move in controlled phases |

---

## Implementation Challenges

| Common challenge | Systems engineer can add value | DAWN process team can add value |
| 1. No inventory of systems or data | Create a system/data-flow inventory with owners and dependencies | Identify how each team actually uses the tools |
| 2. Conflicting versions of records | Trace authoritative sources and define reconciliation rules | Obtain agreement from clinical and administrative record owners |
| 3. Shared or unmanaged accounts | Assess access and propose an approved identity/access plan | Assign access approvers and a joiner/mover/leaver procedure |
| 4. Patient data in email or messaging | Map exposure and recommend safer approved channels | Train staff in containment, reporting and safe sharing |
| 5. Unknown backups or restore capability | Test documented backup and recovery with authorization | Assign owners and agree acceptable recovery procedures |
| 6. Vendor lock-in or unsupported software | Assess export formats and create a staged exit plan | Prioritize records by continuity, retention and operational need |
| 7. Integrations silently fail | Document interfaces and add monitored, accountable handoffs | Define who notices, reports and resolves missing information |
| 8. Poor quality or duplicate data | Profile data safely and design validation and deduplication rules | Agree correction authority and protect original audit history |
| 9. Staff use workarounds to keep care moving | Stabilize a minimal approved path and preserve downtime options | Surface the reasons for workarounds and remove process blockers |
| 10. Big-bang migration threatens service continuity | Plan staged migration, testing, rollback and cutover support | Coordinate training, approvals and go/no-go decisions |

---

## Worksflows in Migration

Do not migrate everything at once. First contain uncontrolled exposure and prevent loss, then map data owners and dependencies. Test exports and restores using approved, minimized data. Preserve traceability and maintain a usable fallback throughout cutover.

| Step | Workflow | Required check |
| 1 | Freeze unapproved expansion of tools and document current systems | Facility leadership authorizes the inventory |
| 2 | Identify confidential data locations, owners and access | Handle findings through approved incident/governance channels |
| 3 | Name the authoritative source for each record category | Clinical, legal/records and operational owners agree |
| 4 | Prioritize a small migration slice and define acceptance criteria | Confirm complete, readable, correctly associated records |
| 5 | Test export, restore, permissions and rollback | Use approved test data and record test outcomes |
| 6 | Cut over in stages, reconcile and retire only after sign-off | Confirm downstream teams and patients/carers are not left without continuity |

---

## Workflows and Operating Procedures

The Teams proposal’s shared ownership and status visibility can help teams coordinate work, but do not consolidate sensitive details into an unrestricted spreadsheet or email thread. Use a governed task register for limited operational metadata and link to records only where the recipient is authorized and access is verified.

| Control | Operating procedure |
| System ownership | Name a business owner and technical contact for every system |
| Access | Review roles and remove access when duties change or end |
| Data correction | Correct at the authoritative source and document material changes |
| Task coordination | Track owner, status, due date and next action; keep clinical detail out |
| Incident or outage | Follow approved incident response and downtime procedures |
| Website publication | Review pages and remove confidential data; Spring remains public-content only |

---

## Medical Related Workflows

During stabilization, clinical care must continue through the facility’s designated safe process. Do not treat data consolidation as permission to alter a chart, change treatment or delay urgent communication. Clinical leads must approve any change to clinical workflows and record authority.

| Workflow | Safe transition pattern |
| Urgent clinical information | Use the established emergency/clinical escalation route immediately |
| Existing chart across systems | Identify the authoritative chart, reconcile under clinical governance and retain required history |
| Test result or referral | Assign a named reviewer, track acknowledgement and document action in the clinical record |
| Patient/carer access or disclosure | Verify identity, authority and scope; use an approved delivery mechanism |
| Cutover or outage | Provide an approved downtime record, communicate changes to staff and reconcile promptly after recovery |
